<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;
use App\Models\Vdesignation;
use App\Models\Vtype;

use App\Models\Country;
use App\Models\Division;
use App\Models\District;
use App\Models\Upazilla;
use App\Models\Thana;
use App\Models\Village;
use App\Models\Postoffice;

use App\Http\Requests\Volunteer\UpdateRequest;
use App\Http\Requests\Volunteer\CreateRequest;

use App\Http\Traits\ResponseTrait;
use App\Http\Traits\ImageHandleTraits;

use Exception;

class VolunteerController extends Controller
{
    use ResponseTrait,ImageHandleTraits;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volunteers=Volunteer::paginate(10);
        return view('volunteer.index',compact('volunteers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vdesignation = Vdesignation::all();
        $vtype        = VType::all();
        
        $division=Division::all();
        $district=District::all();
        $upazilla=Upazilla::all();
        $thana=Thana::all();
        $village=Village::all();
        $postoffice=Postoffice::all();
        
        return view('volunteer.create',compact('vdesignation','vtype','division','district','postoffice','upazilla','thana','village'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(CreateRequest $request)
    {
        try{
            $volunteer=new Volunteer;
            $volunteer->name=$request->name;
            $volunteer->father=$request->father;
            $volunteer->contact=$request->contact;
            $volunteer->e_mail=$request->e_mail;
            $volunteer->national_id=$request->national_id;
            $volunteer->pre_co=$request->pre_co;
            $volunteer->pre_po=$request->pre_po;
            $volunteer->pre_upazilla=$request->pre_upazilla;
            $volunteer->pre_thana=$request->pre_thana;
            $volunteer->pre_district=$request->pre_district;
            $volunteer->pre_division=$request->pre_division;
            $volunteer->pre_vil=$request->pre_vil;
            $volunteer->present_address=$request->present_address;
            $volunteer->permanent_address=$request->permanent_address;
            $volunteer->par_co=$request->par_co;
            $volunteer->par_po=$request->par_po;
            $volunteer->par_upazilla=$request->par_upazilla;
            $volunteer->par_thana=$request->par_thana;
            $volunteer->par_district=$request->par_district;
            $volunteer->par_vil=$request->par_vil;
            $volunteer->par_division=$request->par_division;
            $volunteer->profession=$request->profession;
            $volunteer->desingation_id=$request->desingation;
            $volunteer->volunteer_cat=$request->volunteer_cat;
            $volunteer->type_id=$request->type;
            $volunteer->dob=$request->dob;
            $volunteer->joining_date=$request->joining_date;
            if($request->has('photo')) $volunteer->photo = $this->uploadImage($request->file('photo'), 'volunteer_photo');
            
            if($request->password)
                $volunteer->password=sha1($request->password);
            else
                 $volunteer->password="";

            $volunteer->status=$request->status;
            if(!!$volunteer->save()){
                $vup=Volunteer::find($volunteer->id);
                $vup->mf_id="MFID".date('y').str_pad($volunteer->id,4,"0",STR_PAD_LEFT);
                $vup->save();
                return redirect(route(currentUser().'.volunteer.index'))->with($this->responseMessage(true,null,"Volunteer successfully created."));
            }
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vdesignation = Vdesignation::all();
        $vtype        = VType::all();
        
        $division=Division::all();
        $district=District::all();
        $upazilla=Upazilla::all();
        $thana=Thana::all();
        $village=Village::all();
        $postoffice=Postoffice::all();
        $volunteer=Volunteer::find($id);
        return view('volunteer.edit',compact('volunteer','vdesignation','vtype','division','district','postoffice','upazilla','thana','village'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        try{
            $volunteer=Volunteer::find($id);
            $volunteer->name=$request->name;
            $volunteer->father=$request->father;
            $volunteer->contact=$request->contact;
            $volunteer->e_mail=$request->e_mail;
            $volunteer->national_id=$request->national_id;
            $volunteer->pre_co=$request->pre_co;
            $volunteer->pre_po=$request->pre_po;
            $volunteer->pre_upazilla=$request->pre_upazilla;
            $volunteer->pre_thana=$request->pre_thana;
            $volunteer->pre_district=$request->pre_district;
            $volunteer->pre_division=$request->pre_division;
            $volunteer->pre_vil=$request->pre_vil;
            $volunteer->present_address=$request->present_address;
            $volunteer->permanent_address=$request->permanent_address;
            $volunteer->par_co=$request->par_co;
            $volunteer->par_po=$request->par_po;
            $volunteer->par_upazilla=$request->par_upazilla;
            $volunteer->par_thana=$request->par_thana;
            $volunteer->par_district=$request->par_district;
            $volunteer->par_vil=$request->par_vil;
            $volunteer->par_division=$request->par_division;
            $volunteer->profession=$request->profession;
            $volunteer->desingation_id=$request->desingation;
            $volunteer->volunteer_cat=$request->volunteer_cat;
            $volunteer->type_id=$request->type;
            $volunteer->dob=$request->dob;
            $volunteer->joining_date=$request->joining_date;
            
            if($request->has('photo') && $request->file('photo')) 
                if($this->deleteImage($volunteer->photo, 'volunteer_photo'))
                    $volunteer->photo = $this->uploadImage($request->file('photo'), 'volunteer_photo');
                else
                    $volunteer->photo = $this->uploadImage($request->file('photo'), 'volunteer_photo');
            
            if($request->password)
                $volunteer->password=sha1($request->password);
            else
                 $volunteer->password="";

            $volunteer->status=$request->status;
            if(!!$volunteer->save())
                return redirect(route(currentUser().'.volunteer.index'))->with($this->responseMessage(true,null,"Volunteer successfully updated."));
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
