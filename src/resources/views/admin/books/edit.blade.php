@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.book.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.books.update", [$book->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="Pesanan">{{ trans('cruds.book.fields.bookname') }}</label>
                <input class="form-control {{ $errors->has('Pesanan') ? 'is-invalid' : '' }}" type="text" name="bookname" id="bookname" value="{{ old('bookname', $book->bookname) }}" required>
                @if($errors->has('Pesanan'))
                    <div class="invalid-feedback">
                        {{ $errors->first('Pesanan') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.bookname_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="Pembeli">{{ trans('cruds.book.fields.author') }}</label>
                <input class="form-control {{ $errors->has('Pembeli') ? 'is-invalid' : '' }}" type="text" name="author" id="author" value="{{ old('author', $book->author) }}" required>
                @if($errors->has('Pembeli'))
                    <div class="invalid-feedback">
                        {{ $errors->first('Pembeli') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.author_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection