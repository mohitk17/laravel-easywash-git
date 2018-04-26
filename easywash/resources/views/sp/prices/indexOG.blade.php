@extends('layouts.sp-app')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    Prices Table
  </div>
  <table class="table table-hover">

    <tbody>
      @if($prices->count()>0)
      @foreach($prices as $price)
      <tr>

        <td>
            <a href="{{ route('sp.prices.edit', ['id' => $price->id ] ) }}" class="btn btn-xs btn-info btn-block">Edit</a>
        </td>

      </tr>
      @endforeach

      @else
        <tr>
          <th colspan="5" class="text-center">No prices yet</th>
        </tr>
      @endif
    </tbody>
  </table>
</div>
@stop
