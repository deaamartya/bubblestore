<footer class="bg-white">
  <div class="container-xl px-5 py-3">
    <h5 class="footer-title">POPULAR CATEGORIES</h5>
    <div class="row">
      @php $list_categories_1 = ["Basketball","Nintendo Game",'Food, Snacks and Chips',"BTS Merchandise","Beyblade"]; @endphp
      @php $list_categories_2 = ["Pencils","Bags",'Pencil Cases',"Lego","Pokemon"]; @endphp
      @php $list_categories_3 = ["Harry Potter Merchandise",'Gift Cards',"Roblox","Notebooks","Nerf Guns and Accessories"]; @endphp
      @php $list_categories_4 = ["Squishies","Blackpink Merchandise",'Watches and Smartwatches ',"Board Games","Slime"]; @endphp
      <div class="col-12 d-lg-none">
        <ul>
          @foreach ($list_categories_1 as $l)
          <li><a href="">{{ $l }}</a></li>
          @endforeach
          @foreach ($list_categories_2 as $l)
          <li><a href="">{{ $l }}</a></li>
          @endforeach
          @foreach ($list_categories_3 as $l)
          <li><a href="">{{ $l }}</a></li>
          @endforeach
          @foreach ($list_categories_4 as $l)
          <li><a href="">{{ $l }}</a></li>
          @endforeach
        </ul>
      </div>
      <div class="col-lg-3 d-none d-lg-block">
        <ul>
          @foreach ($list_categories_1 as $l)
          <li><a href="">{{ $l }}</a></li>
          @endforeach
        </ul>
      </div>
      <div class="col-lg-3 d-none d-lg-block">
        <ul>
          @foreach ($list_categories_2 as $l)
          <li><a href="">{{ $l }}</a></li>
          @endforeach
        </ul>
      </div>
      <div class="col-lg-3 d-none d-lg-block">
        <ul>
          @foreach ($list_categories_3 as $l)
          <li><a href="">{{ $l }}</a></li>
          @endforeach
        </ul>
      </div>
      <div class="col-lg-3 d-none d-lg-block">
        <ul>
          @foreach ($list_categories_4 as $l)
          <li><a href="">{{ $l }}</a></li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="col-12 text-center mt-2 mb-4">
      <button class="btn btn-dark">VIEW ALL CATEGORIES</button>
    </div>
    <hr class="d-none d-md-block">
    <div class="col-12 text-center text-muted">
      <a href="#">Help</a> | <a href="#">Terms & Conditions</a> | <a href="#">FAQ</a> | <a href="#">Contact</a> 
    </div>
    <div class="col-12 text-center text-muted">
      Copyright © {{ date('Y') }} <a href="#">Geniebook</a>. All Rights Reserved 
    </div>
  </div>
</footer>