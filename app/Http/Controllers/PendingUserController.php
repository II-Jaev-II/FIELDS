<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PendingUserController extends Controller
{
    public function view(Request $request)
    {
        $user = $request->user();

        $pendingUsers = User::where('authorizedUser', 'No')->get();

        return view('admin/user-management/pending-users', [
            'user' => $user,
            'pendingUsers' => $pendingUsers,
        ]);
    }

    public function update($id)
    {
        User::where('id', $id)->update([
            'authorizedUser' => ('Yes'),
        ]);

        return redirect()->back()->with('success', 'User approved!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('denied', 'User denied and record deleted!');
    }
}
