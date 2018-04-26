@extends('layouts.sp-app')



@section('content')

@if(count($errors)>0)
  <ul class="list-group">
    @foreach($errors->all() as $error)
        <li class="list-group-item text-danger" >
              {{ $error }}
        </li>
    @endforeach
  </ul>
@endif

<div class="panel panel-default">

  <div class="panel-heading">
    Update prices
  </div>

<div class="panel-body">
  <form class="" action="{{route('sp.prices.update', ['id' => $price->id] ) }}" method="post">
{{ csrf_field() }}



<div class="form-group">
  <h3>Laundry</h3>
  <label for="price_laundry">Wash and Fold (Per pound)</label>
  <input type="text" name="price_laundry" class="form-control" value="{{ $price->price_laundry}}">
</div>

<div class="form-group">
  <h3>Dry Cleaning</h3>
  <label for="price_shirt">Shirt</label>
  <input type="text" name="price_shirt" class="form-control" value="{{ $price->price_shirt}}">
  <label for="price_pant">Pant</label>
  <input type="text" name="price_pant" class="form-control" value="{{ $price->price_pant}}">
  <label for="price_blouse">Blouse/Top</label>
  <input type="text" name="price_blouse" class="form-control" value="{{ $price->price_blouse}}">
  <label for="price_sweater">Sweater</label>
  <input type="text" name="price_sweater" class="form-control" value="{{ $price->price_sweater}}">
  <label for="price_dress">Dress</label>
  <input type="text" name="price_dress" class="form-control" value="{{ $price->price_dress}}">
  <label for="price_jacket">Jacket</label>
  <input type="text" name="price_jacket" class="form-control" value="{{ $price->price_jacket}}">
  <label for="price_suit">Suit</label>
  <input type="text" name="price_suit" class="form-control" value="{{ $price->price_suit}}">
  <label for="price_skirt">Skirt</label>
  <input type="text" name="price_skirt" class="form-control" value="{{ $price->price_skirt}}">
  <label for="price_scarf">Scarf</label>
  <input type="text" name="price_scarf" class="form-control" value="{{ $price->price_scarf}}">
  <label for="price_tie">Tie</label>
  <input type="text" name="price_tie" class="form-control" value="{{ $price->price_tie}}">
  <label for="price_shorts">Shorts</label>
  <input type="text" name="price_shorts" class="form-control" value="{{ $price->price_shorts}}">
  <label for="price_coat">Coat</label>
  <input type="text" name="price_coat" class="form-control" value="{{ $price->price_coat}}">
  <label for="price_shawl">Shawl</label>
  <input type="text" name="price_shawl" class="form-control" value="{{ $price->price_shawl}}">
  <label for="price_tunic">Tunic</label>
  <input type="text" name="price_tunic" class="form-control" value="{{ $price->price_tunic}}">
  <label for="price_bra">Bra</label>
  <input type="text" name="price_bra" class="form-control" value="{{ $price->price_bra}}">
  <label for="price_undie">Undie</label>
  <input type="text" name="price_undie" class="form-control" value="{{ $price->price_undie}}">
</div>

<div class="form-group">
  <h3>Dry Cleaning - Homeware</h3>
  <label for="price_comforter">Comforter</label>
  <input type="text" name="price_comforter" class="form-control" value="{{ $price->price_comforter}}">
  <label for="price_blanket">Blanket</label>
  <input type="text" name="price_blanket" class="form-control" value="{{ $price->price_blanket}}">
  <label for="price_pillow">Pillow</label>
  <input type="text" name="price_pillow" class="form-control" value="{{ $price->price_pillow}}">
  <label for="price_pillowcase">Pillow Case</label>
  <input type="text" name="price_pillowcase" class="form-control" value="{{ $price->price_pillowcase}}">
  <label for="price_curtain">Curtain</label>
  <input type="text" name="price_curtain" class="form-control" value="{{ $price->price_curtain}}">
  <label for="price_duvercover">Duver Cover</label>
  <input type="text" name="price_duvercover" class="form-control" value="{{ $price->price_duvercover}}">
  <label for="price_rug">Rug</label>
  <input type="text" name="price_rug" class="form-control" value="{{ $price->price_rug}}">
  <label for="price_sheets">Sheets</label>
  <input type="text" name="price_sheets" class="form-control" value="{{ $price->price_sheets}}">
</div>

<div class="form-group">
  <h3>Tailoring</h3>
  <label for="price_hemming">Hemming</label>
  <input type="text" name="price_hemming" class="form-control" value="{{ $price->price_hemming}}">
  <label for="price_hemmingpants">Original Hemming(Pants)</label>
  <input type="text" name="price_hemmingpants" class="form-control" value="{{ $price->price_hemmingpants}}">
  <label for="price_hemmingsleeve">Original Shorten Sleeve</label>
  <input type="text" name="price_hemmingsleeve" class="form-control" value="{{ $price->price_hemmingsleeve}}">
  <label for="price_taper">Taper</label>
  <input type="text" name="price_taper" class="form-control" value="{{ $price->price_taper}}">
  <label for="price_button">Button</label>
  <input type="text" name="price_button" class="form-control" value="{{ $price->price_button}}">
  <label for="price_patch">Patch</label>
  <input type="text" name="price_patch" class="form-control" value="{{ $price->price_patch}}">
  <label for="price_zipper">Zipper</label>
  <input type="text" name="price_zipper" class="form-control" value="{{ $price->price_zipper}}">
</div>

<div class="form-group">
  <h3>Additional Information</h3>
  <textarea name="price_content" id="price_content" rows="5" cols="5" class="form-control" value="{{ $price->price_content}}"></textarea>
</div>



<div class="form-group">
  <div class="text-center">
    <button type="submit" class="btn btn-success btn-block" name="button">Update </button>

  </div>

</div>

  </form>

</div>



</div>

@stop
