<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Http\Requests\BaseRegisterFormRequest;
use App\Http\Requests\CreateHouseRequest;
use App\Http\Requests\CreateStroyRequest;
use App\Imports\Flats_import;
use App\Models\Flat;
use App\Models\House;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Stroy;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;


class Admin_controller extends Controller
{
    //check your role
    function Check_role(){
        if(Auth::check()){
            if(Auth::user()->check_role(1)){
                return true;
            }
        }
        return App::abort(404);
    }

    public function create_user_stroy(BaseRegisterFormRequest $request){
        $this->Check_role();

        $data = $request->validated();

        $user = User::query()
            ->where('login', $data['login'])
            ->first();

        if ($user !== null) {
            $user->updateFromRequest($data);
        } else {
            $user = User::createNovostroyFromRequest($data);
        }
        return redirect(route('profile'));
    }

    public function user_stroy_form(){
        $this->Check_role();

        $users = User::query()->where('role',2)->get();
        return view('admin.novostroy',['users'=>$users]);
    }

    public function create_stroy(CreateStroyRequest $request){
        $this->Check_role();

        $data = $request->validated();
        Stroy::createFromRequest($data);
        return redirect(route('profile'));
    }

    public function create_house_form(){
        $this->Check_role();

        $stroys = Stroy::all();
        return view('admin.create_house',['stroys' => $stroys]);
    }

    public function create_house(CreateHouseRequest $request){
        $this->Check_role();

        $data = $request->validated();
        $house = House::createFromRequest($data);

        $places = Stroy::query()->find($data['stroy_id'])->places;

        $myplaces = json_decode($places, true);
        array_push($myplaces,array("id"=>$house->id));
        Stroy::query()->find($data['stroy_id'])->update(['places'=>json_encode($myplaces)]);

        return redirect(route('profile'));
    }


    public function add_flats_forms(){
        $this->Check_role();

        $houses = House::all();
        return view('admin.add_flats',['houses' => $houses]);
    }

    public function add_flats(Request $request){
        $this->Check_role();

        $this->validate($request, [
            'select_file' => 'required|mimes:xls,xlsx'
        ]);

        $path1 = $request->file('select_file')->store('temp');
        $path=storage_path('app').'/'.$path1;

        $data = Excel::toArray(new Flats_import, $path);

        Flat::flats_import($data,$request->house_id);

        return $request;
    }
}
