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

@if($prices->count()>0 )

<h1>Alredy exist</h1>
<h1>Go to edit</h1>


@else

<div class="panel-heading">Create price Table
<p>Leave prices blank if no such service provided</p>
</div>


<div class="panel-body">


<form class="" action="{{route('sp.prices.store')}}" method="post"> {{ csrf_field() }}

      <div class="form-group">
        <h3>Laundry</h3>
        <label for="price_laundry">Wash and Fold (Per pound)</label>
        <input type="text" name="price_laundry" class="form-control">
      </div>

      <div class="form-group">
        <h3>Dry Cleaning</h3>
        <label for="price_shirt">Shirt</label>
        <input type="text" name="price_shirt" class="form-control">
        <label for="price_pant">Pant</label>
        <input type="text" name="price_pant" class="form-control">
        <label for="price_blouse">Blouse/Top</label>
        <input type="text" name="price_blouse" class="form-control">
        <label for="price_sweater">Sweater</label>
        <input type="text" name="price_sweater" class="form-control">
        <label for="price_dress">Dress</label>
        <input type="text" name="price_dress" class="form-control">
        <label for="price_jacket">Jacket</label>
        <input type="text" name="price_jacket" class="form-control">
        <label for="price_suit">Suit</label>
        <input type="text" name="price_suit" class="form-control">
        <label for="price_skirt">Skirt</label>
        <input type="text" name="price_skirt" class="form-control">
        <label for="price_scarf">Scarf</label>
        <input type="text" name="price_scarf" class="form-control">
        <label for="price_tie">Tie</label>
        <input type="text" name="price_tie" class="form-control">
        <label for="price_shorts">Shorts</label>
        <input type="text" name="price_shorts" class="form-control">
        <label for="price_coat">Coat</label>
        <input type="text" name="price_coat" class="form-control">
        <label for="price_shawl">Shawl</label>
        <input type="text" name="price_shawl" class="form-control">
        <label for="price_tunic">Tunic</label>
        <input type="text" name="price_tunic" class="form-control">
        <label for="price_bra">Bra</label>
        <input type="text" name="price_bra" class="form-control">
        <label for="price_undie">Undie</label>
        <input type="text" name="price_undie" class="form-control">
      </div>

      <div class="form-group">
        <h3>Dry Cleaning - Homeware</h3>
        <label for="price_comforter">Comforter</label>
        <input type="text" name="price_comforter" class="form-control">
        <label for="price_blanket">Blanket</label>
        <input type="text" name="price_blanket" class="form-control">
        <label for="price_pillow">Pillow</label>
        <input type="text" name="price_pillow" class="form-control">
        <label for="price_pillowcase">Pillow Case</label>
        <input type="text" name="price_pillowcase" class="form-control">
        <label for="price_curtain">Curtain</label>
        <input type="text" name="price_curtain" class="form-control">
        <label for="price_duvercover">Duver Cover</label>
        <input type="text" name="price_duvercover" class="form-control">
        <label for="price_rug">Rug</label>
        <input type="text" name="price_rug" class="form-control">
        <label for="price_sheets">Sheets</label>
        <input type="text" name="price_sheets" class="form-control">
      </div>

      <div class="form-group">
        <h3>Tailoring</h3>
        <label for="price_hemming">Hemming</label>
        <input type="text" name="price_hemming" class="form-control">
        <label for="price_hemmingpants">Original Hemming(Pants)</label>
        <input type="text" name="price_hemmingpants" class="form-control">
        <label for="price_hemmingsleeve">Original Shorten Sleeve</label>
        <input type="text" name="price_hemmingsleeve" class="form-control">
        <label for="price_taper">Taper</label>
        <input type="text" name="price_taper" class="form-control">
        <label for="price_button">Button</label>
        <input type="text" name="price_button" class="form-control">
        <label for="price_patch">Patch</label>
        <input type="text" name="price_patch" class="form-control">
        <label for="price_zipper">Zipper</label>
        <input type="text" name="price_zipper" class="form-control">
      </div>

      <div class="form-group">
        <h3>Additional Information</h3>
        <textarea name="price_content" id="price_content" rows="5" cols="5" class="form-control"></textarea>
      </div>

      <div class="form-group">
        <div class="text-center">
          <button type="submit" class="btn btn-success btn-block" name="button">Create Price Table</button>
        </div>
      </div>

</form>
</div>


 @endif
</div>

@stop
