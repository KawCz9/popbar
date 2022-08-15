<?php

namespace App\Http\Controllers;

use App\Models\Bartables;
use App\Models\Bookingtables;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking(Request $request, $id){
        $query = Bartables::find($id);
        $data = [
            'table_data' => $query
        ];
        return view('bookingform',$data);
    }

    public function booking_active(Request $request){
        $newBooking = new Bookingtables();
        $newBooking -> bartables_id = $request -> input('table_id');
        $newBooking -> table_no = $request -> input('table_name');
        $newBooking -> booking_name = $request -> input('booking_name');
        $newBooking -> booking_date = $request -> input('booking_date');
        $newBooking -> booking_time = $request -> input('booking_time');
        $newBooking -> booking_phone = $request -> input('booking_phone');
        $newBooking -> booking_staff = $request -> input('booking_staff');
        $newBooking -> save();
        $updateStatusTable = Bartables::find($request -> input('table_id'));
        $updateStatusTable -> table_status = '1';
        $updateStatusTable -> save();
        return redirect('/userhome')->with('booking_complete',"You booking complete");
    }

    public function addbookingadmin(){
        $addbooking = Bartables::all();
        $data = [
            'addbookings' => $addbooking,
        ];
        return view('add_booking_admin',$data);
    }

    public function booking_admin(Request $request, $id){
        $query = Bartables::find($id);
        $data = [
            'table_data' => $query
        ];
        return view('bookingform_admin',$data);
    }


    public function addbookingadmin_action(Request $request){
        $newBooking = new Bookingtables();
        $newBooking -> bartables_id = $request -> input('table_id');
        $newBooking -> table_no = $request -> input('table_name');
        $newBooking -> booking_name = $request -> input('booking_name');
        $newBooking -> booking_date = $request -> input('booking_date');
        $newBooking -> booking_time = $request -> input('booking_time');
        $newBooking -> booking_phone = $request -> input('booking_phone');
        $newBooking -> booking_staff = $request -> input('booking_staff');
        $newBooking -> save();
        $updateStatusTable = Bartables::find($request -> input('table_id'));
        $updateStatusTable -> table_status = '1';
        $updateStatusTable -> save();
        return redirect('/adminhome')->with('booking_complete',"You booking complete");
    }

    public function editbookingadmin($id){
        $formedit = Bookingtables::find($id);
        $data = [
            'formedit' => $formedit,
        ];
        return view('edit_booking_admin',$data);
    }

    public function editbookingadmin_action(Request $request){
        $editBooking = Bookingtables::find($request -> input('booking_id'));
        $editBooking -> bartables_id = $request -> input('table_id');
        $editBooking -> table_no = $request -> input('table_name');
        $editBooking -> booking_name = $request -> input('booking_name');
        $editBooking -> booking_date = $request -> input('booking_date');
        $editBooking -> booking_time = $request -> input('booking_time');
        $editBooking -> booking_phone = $request -> input('booking_phone');
        $editBooking -> booking_staff = $request -> input('booking_staff');
        $editBooking -> save();
        $updateStatusTable = Bartables::find($request -> input('table_id'));
        $updateStatusTable -> table_status = '1';
        $updateStatusTable -> save();
        return redirect('/adminhome')->with('edit_booking_complete',"You edit booking complete");
    }

    public function removebookingadmin(Request $request, $id){
        $setstatus = Bookingtables::find($id);
        $status = $setstatus -> bartables_id;
        $tablesdata = Bartables::find($status);
        $tablesdata -> table_status = 0;
        $tablesdata -> save();
        Bookingtables::destroy($id);
        return redirect('/adminhome')->with('remove_booking_complete',"ลบการจองข้อมูลสำเร็จ");
    }
}
