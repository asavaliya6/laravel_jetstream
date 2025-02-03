<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Team;

// use Illuminate\Http\Request;
// use App\Models\User;
// use App\Models\Team;
// use Laravel\Jetstream\Events\TeamMemberAdded;
// use Laravel\Jetstream\Models\TeamInvitation;
// use Illuminate\Support\Facades\Mail;

use App\Models\Team;
use App\Models\TeamInvitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Laravel\Jetstream\Events\TeamMemberAdded;

class TeamInvitationController extends Controller
{
    public function invite(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'team_id' => 'required|exists:teams,id',
        ]);

        $team = Team::find($request->team_id);
        $email = $request->email;

        // Create and send an invitation email (customize as needed)
        $invitation = TeamInvitation::create([
            'team_id' => $team->id,
            'email' => $email,
            'role' => 'member', // You can adjust the role as needed
        ]);

        // Send the invitation email (you can customize the email)
        Mail::to($email)->send(new \Laravel\Jetstream\Mail\TeamInvitation($invitation));

        return redirect()->route('teams.show', $team->id)->with('status', 'Invitation sent!');
    }

    public function accept(Request $request, TeamInvitation $invitation)
    {
        $user = $request->user();
        
        // Add user to the team
        $user->teams()->attach($invitation->team_id, ['role' => $invitation->role]);

        // Trigger TeamMemberAdded event
        event(new TeamMemberAdded($invitation->team, $user));

        // Delete the invitation after accepting
        $invitation->delete();

        return redirect()->route('teams.show', $invitation->team_id);
    }
}

