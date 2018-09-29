@extends('layouts.default', ['title'=>'Contact'])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h2>Get In Touch</h2>

                <p><span class="text-muted">If you having trouble with this service, please <a
                                href="{{ config('laracarte.admin_support_email') }}" data-helpful="laracarte" data-helpful-modal="on">ask for help</a>.</span>
                </p>

                <form method="POST" action="{{ route('contact.store') }}">
                    {{ csrf_field() }}

                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"
                               required="required">
                        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control"
                               required="required">
                        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}

                    </div>


                    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                        <label for="message" class="control-label sr-only">Message</label>
                        <textarea id="message" class="form-control" name="message" rows="10" cols="10"
                                  required="required">{{ old('message') }}</textarea>
                        {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection