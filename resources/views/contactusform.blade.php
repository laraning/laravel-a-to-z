@extends('contact_layout')

@section('head')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Contact Form</title>
@endsection

@section('body')
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Contact us - {{ date('Y') }}
                </div>
                <div class="card-block">
                    <form role="form" method="POST" action="{{ route('contactus.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group col-lg-4">
                            <label class="form-control-label" for="form-group-input">Name</label>
                            <input type="text" class="form-control" id="form-group-input" name="name" value="{{ old('name') }}">
                            @if($errors->has('name'))
                                <span class="help-block">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="form-control-label" for="form-group-input">Email</label>
                            <input type="text" class="form-control" id="form-group-input" name="email" value="{{ old('email') }}">
                            @if($errors->has('email'))
                                <span class="help-block">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="form-control-label" for="form-group-input">Reason</label>
                            <select size="0" class="form-control" name="reason">
                                <option value="sales" {{ old('reason') == 'sales' ? 'selected' : '' }}>Sales</option>
                                <option value="techsupport" {{ old('reason') == 'techsupport' ? 'selected' : '' }}>Tech Support</option>
                                <option value="generalfeedback" {{ old('reason') == 'generalfeedback' ? 'selected' : '' }}>General Feedback</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-12">
                            <label class="form-control-label" for="form-group-input">Notes</label>
                            <textarea class="form-control" id="form-group-input" name="notes" rows="6"></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <button type="submit" class="btn btn-primary">Send Information</button>
                        </div>
                        <div class="form-group col-lg-12">
                            @isset($message)
                                {{ $message }}
                            @endisset
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection