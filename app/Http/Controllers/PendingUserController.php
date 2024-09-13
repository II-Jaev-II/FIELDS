<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PendingUserController extends Controller
{
    public function view(Request $request)
    {
        $user = $request->user();

        $pendingUsers = User::join('provinces', 'users.province', '=', 'provinces.id')
            ->join('municipalities', 'users.municipality', '=', 'municipalities.id')
            ->join('barangays', 'users.barangay', '=', 'barangays.id')
            ->where('authorizedUser', 'No')
            ->select('users.*', 'provinces.province_name', 'municipalities.municipality_name', 'barangays.barangay_name')
            ->get();

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
