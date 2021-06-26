<div class="section bg-white border-top border-3 border-dark">
  <div class="row align-items-center d-none d-md-flex">
    <div class="col-md-2 col-12 align-self-center text-center">
        <div class="section-title-2">
          <img src={{ asset('assets/download.png') }} class="w-1 mx-3 align-middle">TODAY'S TRENDING
        </div>
    </div>
    <div class="col-md-8 text-left border-start my-2">
      <span class="ms-3 text-orange">Best Seller</span>
    </div>
    <div class="col-md-2 owl-controls clickable">
      <div class="owl-buttons float-end">
        <div class="owl-prev btn customPrevBtn border-start px-4 py-3 h-100 rounded-0"><i class="fa fa-chevron-left"></i></div><div class="owl-next btn customNextBtn border-start border-end px-4 py-3 h-100 rounded-0"><i class="fa fa-chevron-right"></i></div>
      </div>
    </div>
  </div>
  <div class="row align-items-center d-flex d-md-none g-0">
    <div class="col-12 align-self-center text-start border-bottom py-3">
        <div class="section-title-2">
          <img src={{ asset('assets/download.png') }} class="w-1 mx-3 align-middle">TODAY'S TRENDING
        </div>
    </div>
    <div class="col-7 text-left">
      <span class="ms-3 text-orange">Best Seller</span>
    </div>
    <div class="col-5 owl-controls clickable">
      <div class="owl-buttons-mobile d-flex float-end">
        <div class="owl-prev customPrevBtn border-start px-4 py-3 h-100 rounded-0"><i class="fa fa-chevron-left"></i></div>
        <div class="owl-next customNextBtn border-start border-end px-4 py-3 h-100 rounded-0"><i class="fa fa-chevron-right"></i></div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="owl-carousel">
      @php $files = ["assets/04d5b7c0afbda640f57f10162197f55b_1618122627.png",
      "assets/ef81a4c9a65424edf0e5657026e87a6d.jpg",
      "assets/febec5cbadf6a70d4fe35aa28c93a714.jpg",
      "assets/19e60ea4b59b8d33d36cac3064cc9623_1616138883.JPG",
      "assets/559b11c95037941ee5e7f04f30057c0b_1606232862.png",
      "assets/b989f2afb5020941a2bff231ac85344b.jpg",
      "assets/b84c308151771fa39c125cba15d93653.jpg",
      "assets/8b213e3503c45ff493ec9912a47f7f1e_1621503945.jpg",
      "assets/44f3a0d140a3882b332fe44b8d98b2a7.jpg",
      "assets/8d12b18fd7e466fbc8f637ea1cf211bc.jpg"];
      $names = ["401 Robux (USD $5 Roblox Gift Card) - Virtual Item. SINGAPORE ONLY",
      "2021 New Rainbow Unicorn Pop it Fidget Toy Among Us Pop Push bubble stress relief kids pop it tiktok",
      "Guajave Magic Gathering Playmat,60*35*0.2CM Board Games Anime Play Mat,MTG Playmat,Custom Table Pad Mouse Pad with Free Waterproof Portable Bag",
      "Haikyuu Acrylic Keychain Hinata Shoyo Kageyama Kenma Sushi Cartoon Cute Anime Key Ring Bag Pendant Keyring",
      "Octopus Doll Toy Color Plush Doll Double Sided Stuffed Plush Toy Cute Soft Reversible Creative Plush Kids Children Gifts",
      "Stick Wall Ball Stress Relief Toys Sticky Squash Ball Globbles Decompression Toy Sticky Target Ball Catch Throw Ball Kids Toys",
      "SAN-X Sumikkogurashi Plush Bag Charm Japan Sushi Stuffed Sumikko gurashi 3.15''",
      "Lego Dinosaur Jurassic World Toys For Children Model Gift Kids Animal series Blocks",
      "15 Colors- ZEBRA Zebra WKT7 Mildliner Highlighter Drawing Marker Pen",
      "Future Card Buddyfight Ace Booster Pack Vol.7(Perfected Time Ruler)[BFE-S-BT07][Bundle of 5 Packs]"
      ];
      $prices = ["700","345","1,139","115","379","246","649","210","155","1,649"];
      @endphp
      @foreach($files as $f)
      <div class="pb-3 border-top border-end product pt-2 h-100">
        <a href="{{ url('product') }}">
          <div class="px-2 image-container mb-2 d-flex justify-content-center text-center w-100">
            <img src="{{ asset($f) }}" class="product-image align-self-center" alt="...">
          </div>
          <div class="product-info px-3">
            <span class="product-title d-block text-truncate">
              {{ $names[$loop->index] }}
            </span>
            <div class="product-price">
              <img class="mr-3 icon-price" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNCIgaGVpZ2h0PSIxNCIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBpZD0iR3JvdXBfMzIzIiBkYXRhLW5hbWU9Ikdyb3VwIDMyMyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTEyMDMgLTIyNCkiPgogICAgPGNpcmNsZSBpZD0iRWxsaXBzZV8yNjgiIGRhdGEtbmFtZT0iRWxsaXBzZSAyNjgiIGN4PSIxMiIgY3k9IjEyIiByPSIxMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTIwMyAyMjQpIiBmaWxsPSIjYWRkM2ZmIi8+CiAgICA8cGF0aCBpZD0iUGF0aF80MTgiIGRhdGEtbmFtZT0iUGF0aCA0MTgiIGQ9Ik0xMjIzLjMwNiwyNTguNzc0YTEuNTk0LDEuNTk0LDAsMCwxLS4yNjYsMS4wMjksNC4wODgsNC4wODgsMCwwLDAtLjI1NiwzLjA0LDQuMTYzLDQuMTYzLDAsMCwwLDEuMDU1LDEuODI5LDEuNzQsMS43NCwwLDAsMS0uNjkzLDIuOTU0LDEuNTgzLDEuNTgzLDAsMCwxLTEuNTYzLS4zMzcsNy40MTksNy40MTksMCwwLDEtMS43NC0yLjQ0Nyw2Ljk2OSw2Ljk2OSwwLDAsMS0uNTc1LTEuOTE5LDUuNzEsNS43MSwwLDAsMS0uMDkyLTEuODk0LDExLjU0NiwxMS41NDYsMCwwLDEsLjM4MS0xLjg1OCwzLjE0MSwzLjE0MSwwLDAsMSwxLjEyNi0xLjg2NywxLjc0MiwxLjc0MiwwLDAsMSwyLjUxNi44Yy4wMzEuMDgzLjExNS4xMzcuMTEuMjM5QzEyMjMuMywyNTguNDkzLDEyMjMuMzA2LDI1OC42NDMsMTIyMy4zMDYsMjU4Ljc3NFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xMi4wOTQgLTI0Ljc4OCkiIGZpbGw9IiNmZmYiLz4KICAgIDxwYXRoIGlkPSJQYXRoXzQxOSIgZGF0YS1uYW1lPSJQYXRoIDQxOSIgZD0iTTEyMzUuMiwyNDIuNDA4YTEuNzE1LDEuNzE1LDAsMSwxLC4wMzEtMy40MywxLjcxNSwxLjcxNSwwLDEsMS0uMDMxLDMuNDNaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMjIuODc3IC0xMC4yMzQpIiBmaWxsPSIjZmZmIi8+CiAgPC9nPgo8L3N2Zz4K">
              <span>{{ $prices[$loop->index] }}</span>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</div>