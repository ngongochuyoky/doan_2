
<li class="{{ Request::is('accounts*') ? 'active' : '' }}">
    <a href="{!! route('accounts.index') !!}"><i class="fa fa-edit"></i><span>My Account</span></a>
</li>


<!-- Admin Section -->


@if(Auth::user()->role_id < 3) 
<li class="header">Admin</li>

<li class="{{ Request::is('accounts*') ? 'active' : '' }}">
    <a href="{!! route('accounts.index') !!}"><i class="fa fa-edit"></i><span>Accounts</span></a>
</li>

@endif
