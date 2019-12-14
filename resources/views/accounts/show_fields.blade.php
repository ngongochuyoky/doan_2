<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $account->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User_id:') !!}
    <p>{!! $account->user_id !!}</p>
</div>
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! Auth::user()->name !!}</p>
</div>
<!-- Code Field -->
<div class="form-group">
    {!! Form::label('gender', 'Gender:') !!}
    <p>{!! $account->gender !!}</p>
</div>

<!-- Currency Field -->
<div class="form-group">
    {!! Form::label('date_of_birth', 'Date_of_birth:') !!}
    <p>{!! $account->date_of_birth !!}</p>
</div>

<!-- Phone Ext Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone Number:') !!}
    <p>{!! $account->phone !!}</p>
</div>

<!-- Flag Field -->
<div class="form-group">
    {!! Form::label('city', 'City:') !!}
    <p>{!! $account->city !!}</p>
</div>

<div class="form-group">
    {!! Form::label('country_id', 'Country Id:') !!}
    <p>{!! $account->country_id !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $account->deleted_at !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $account->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $account->updated_at !!}</p>
</div>

