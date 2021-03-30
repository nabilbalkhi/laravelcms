<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TeamMemberRequest;
use App\Models\TeamMember;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
  public function index()
  {
    $members = TeamMember::all();
    return view('back.team.index', compact('members'));
  }

  public function create()
  {
    return view('back.team.create');
  }

  public function store(TeamMemberRequest $request)
  {
    $team_member_data = $request->validated();
    $imagePath = $request->file('image')->store('public/images/team');
    $image = basename($imagePath);
    $team_member_data['image'] = $image;
    TeamMember::create($team_member_data);
    return redirect(route('admin.teamMember.index'));
  }

  public function edit(TeamMember $teamMember)
  {
    return view('back.team.edit', compact('teamMember'));
  }

  public function update(TeamMemberRequest $request, TeamMember $teamMember)
  {
    $team_member_data = $request->validated();
    if ($request->hasFile('image')){
      $preImage = TeamMember::find($teamMember['id'])['image'];
      Storage::delete('public/images/team/' . $preImage);
      $imagePath = $request->file('image')->store('public/images/team');
      $image = basename($imagePath);
      $team_member_data['image'] = $image;
    }
    TeamMember::where('id', $teamMember['id'])->update($team_member_data);
    return redirect(route('admin.teamMember.index'));
  }

  public function destroy(TeamMember $teamMember)
  {
    $preImage = TeamMember::find($teamMember['id'])['image'];
    Storage::delete('public/images/team/' . $preImage);
    $teamMember->delete();
    return back();
  }
}
