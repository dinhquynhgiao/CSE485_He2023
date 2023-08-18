<?php

namespace App\Http\Controllers;
use App\Models\Channel;
use Illuminate\Http\Request;

class ChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $channels = Channel::latest()->paginate(25);
        
        return view('index',compact('channels'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Name'          =>  'required',
            'Description'          =>  'required',
            'SubscribersCount'          =>  'required',
            'URL'          =>  'required',
            
        ],[
        ]);

        $channel = new Channel;
        $channel -> Name = $request->Name;       
        $channel -> Description = $request->Description;       
        $channel -> SubscribersCount = $request->SubscribersCount;       
        $channel -> URL = $request->URL;      
           
        $channel->save();
    
        return redirect()->route('channels.index')->with('success', 'Added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Lấy ra thông tin của Đối tượng Channel có id = giá trị truyền trong liên kết
        $channel  = Channel::find($id);

        //Trả về trang hiển thị Chi tiết
        return view('.detail', compact('channels'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('.edit', compact('channels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Name'          =>  'required',
            'Description'          =>  'required',
            'SubscribersCount'          =>  'required',
            'URL'          =>  'required',
        ]);


        $channel = Channel::find($request->hidden_id);

        $channel -> Name = $request->Name;       
        $channel -> Description = $request->Description;       
        $channel -> SubscribersCount = $request->SubscribersCount;       
        $channel -> URL = $request->URL;     

        $channel->save();
        return redirect()->route('channels.index')
                       ->with('success','Channel updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $channel = Channel::find($id);
    
    if (!$channel) {
        return redirect()->route('channels.index')->with('error', 'Channel not found.');
    }
    
    $channel->delete();
    return redirect()->route("channels.index")->with('success', 'Channel deleted successfully.');
    }
}
