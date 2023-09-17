<a href="" class="my-4 customer d-flex justify-content-left align-items-center">
    <i class="fas fa-home"></i>
    <div class="para ml-2">
        <p>Home</p>
    </div>
</a>
@if(\Illuminate\Support\Facades\Auth::user()->role!=4)
    <a href="{{ route('order.index') }}" class="my-4 customer d-flex is-active justify-content-left align-items-center">
        <img src="{{ asset('../images/mor.png') }} " alt="">
        <div class="para ml-2">
            <p>Orders</p>
        </div>
    </a>

@endif
{{--@if(\Illuminate\Support\Facades\Auth::user()->role==4)--}}
    <a href="{{ route('admin.steps') }}" class="my-4 customer d-flex justify-content-left align-items-center">
        <i class="fas fa-sliders-h"></i>
        <div class="para ml-2">
            <p>Setup</p>
        </div>
    </a>

{{--@endif--}}
@if(\Illuminate\Support\Facades\Auth::user()->role==1||\Illuminate\Support\Facades\Auth::user()->role==2)
    <a href="{{ route('report.user.index') }}" class="my-4 customer d-flex justify-content-left align-items-center">
        <i class="fas fa-file-alt"></i>
        <div class="para ml-2">
            <p>User Reports</p>
        </div>
    </a>
    <a href="{{ route('report.provider.index') }}" class="my-4 customer d-flex justify-content-left align-items-center">
        <i class="fas fa-file-alt"></i>
        <div class="para ml-2">
            <p>Provider Reports</p>
        </div>
    </a>
@endif

@if(\Illuminate\Support\Facades\Auth::user()->role==1)
    <a href="{{ route('admin.index') }}" class="my-4 customer d-flex justify-content-left align-items-center">
        <i class="fas fa-user-plus"></i>
        <div class="para ml-2">
            <p>Create New User</p>
        </div>
    </a>
@endif

<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="my-4 customer d-flex justify-content-left align-items-center">
    <i class="fas fa-sign-out-alt"></i>
    <div class="para ml-2">
        <p>Log Out</p>
    </div>
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
</form>
