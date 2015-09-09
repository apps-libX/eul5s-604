@extends('app')

@section('content')

<h1>Contact Us</h1>

@if (count($errors) > 0)
<div class="alert alert-danger">
    Please correct the following errors:<br/>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

{!! Form::open(array('route' => 'contact_store', 'class' => 'form', 'novalidate' => 'novalidate')) !!}
<div class="form-group">
    {!! Form::label('Name') !!}
    {!! Form::text('name', null, array('required', 'class'=>'form-control', 'placeholder'=>'Name')) !!}
</div>
<div class="form-group">
    {!! Form::label('E-mail Address') !!}
    {!! Form::text('email', null, array('required', 'class'=>'form-control', 'placeholder'=>'E-mail address')) !!}
</div>
<div class="form-group">
    {!! Form::label('Message') !!}
    {!! Form::textarea('message', null, array('required', 'class'=>'form-control', 'placeholder'=>'Message')) !!}
</div>
<div class="form-group">
    {!! Form::submit('Contact Us!', array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
@endsection


{{--Created by anonymoussc on 9/9/15 10:24 PM--}}
