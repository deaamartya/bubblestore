<div class="section bg-white">
  @include('elements.header-product-grid',["asset" => "assets/download(2).png", "title" => "NEW PRODUCTS"])
  <div class="row g-0 d-none d-md-flex">
    <div class="col-6">
      <div class="row g-0">
        @php $files = ["assets/f98f1f28fdccf5e455ca80e8fe73f65b.jpg","assets/3978f9982278073db306656b7e1515d9_1624603348.jpg","assets/5dc4dd87f02d4e414bcf2f6cce29a21a.jpg","assets/68f4fbcc2a091945b99f12a55fb6087b.jpg"];
        $names = ["Bandai Tamagotchi The Originals (2)","Infeel.Me 30sheets Portable Cute Sticky Note Cartoon Memo Pad Notepad School Office Supplies","Mohamm Cute Japanese diary Korean Journal Stationary Unicorn Craft Paper Stickers Scrapbooking","Pokémon TCG Vivid Voltage Booster Pack"];
        $prices = ["4,639","194","181","739"];
        $prices_x = ["","260","239",""];
        @endphp
        @foreach($files as $f)
          @if($loop->last)
          <div class="p-3 product">
          @elseif($loop->first)
          <div class="px-3 pb-3 pt-4 border-bottom product">
          @else
          <div class="p-3 border-bottom product">
          @endif
          <a href="{{ url('product') }}">
            <div class="row">
              <div class="col-5">
                <img src="{{ asset($f) }}" class="product-image w-100" alt="...">
              </div>
              <div class="col-7">
                <span class="product-title d-block text-truncate">
                  {{ $names[$loop->index] }}
                </span>
                <div class="product-price row justify-content-between">
                  <div class="col-6">
                    <img class="mr-3 icon-price" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNCIgaGVpZ2h0PSIxNCIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBpZD0iR3JvdXBfMzIzIiBkYXRhLW5hbWU9Ikdyb3VwIDMyMyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTEyMDMgLTIyNCkiPgogICAgPGNpcmNsZSBpZD0iRWxsaXBzZV8yNjgiIGRhdGEtbmFtZT0iRWxsaXBzZSAyNjgiIGN4PSIxMiIgY3k9IjEyIiByPSIxMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTIwMyAyMjQpIiBmaWxsPSIjYWRkM2ZmIi8+CiAgICA8cGF0aCBpZD0iUGF0aF80MTgiIGRhdGEtbmFtZT0iUGF0aCA0MTgiIGQ9Ik0xMjIzLjMwNiwyNTguNzc0YTEuNTk0LDEuNTk0LDAsMCwxLS4yNjYsMS4wMjksNC4wODgsNC4wODgsMCwwLDAtLjI1NiwzLjA0LDQuMTYzLDQuMTYzLDAsMCwwLDEuMDU1LDEuODI5LDEuNzQsMS43NCwwLDAsMS0uNjkzLDIuOTU0LDEuNTgzLDEuNTgzLDAsMCwxLTEuNTYzLS4zMzcsNy40MTksNy40MTksMCwwLDEtMS43NC0yLjQ0Nyw2Ljk2OSw2Ljk2OSwwLDAsMS0uNTc1LTEuOTE5LDUuNzEsNS43MSwwLDAsMS0uMDkyLTEuODk0LDExLjU0NiwxMS41NDYsMCwwLDEsLjM4MS0xLjg1OCwzLjE0MSwzLjE0MSwwLDAsMSwxLjEyNi0xLjg2NywxLjc0MiwxLjc0MiwwLDAsMSwyLjUxNi44Yy4wMzEuMDgzLjExNS4xMzcuMTEuMjM5QzEyMjMuMywyNTguNDkzLDEyMjMuMzA2LDI1OC42NDMsMTIyMy4zMDYsMjU4Ljc3NFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xMi4wOTQgLTI0Ljc4OCkiIGZpbGw9IiNmZmYiLz4KICAgIDxwYXRoIGlkPSJQYXRoXzQxOSIgZGF0YS1uYW1lPSJQYXRoIDQxOSIgZD0iTTEyMzUuMiwyNDIuNDA4YTEuNzE1LDEuNzE1LDAsMSwxLC4wMzEtMy40MywxLjcxNSwxLjcxNSwwLDEsMS0uMDMxLDMuNDNaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMjIuODc3IC0xMC4yMzQpIiBmaWxsPSIjZmZmIi8+CiAgPC9nPgo8L3N2Zz4K">
                    <span>{{ $prices[$loop->index] }}</span>
                  </div>
                  @if($prices_x[$loop->index] != "")
                  <div class="col-6 text-end text-decoration-line-through">
                    <img class="mr-3 icon-price" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNCIgaGVpZ2h0PSIxNCIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBpZD0iR3JvdXBfMzIzIiBkYXRhLW5hbWU9Ikdyb3VwIDMyMyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTEyMDMgLTIyNCkiPgogICAgPGNpcmNsZSBpZD0iRWxsaXBzZV8yNjgiIGRhdGEtbmFtZT0iRWxsaXBzZSAyNjgiIGN4PSIxMiIgY3k9IjEyIiByPSIxMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTIwMyAyMjQpIiBmaWxsPSIjYWRkM2ZmIi8+CiAgICA8cGF0aCBpZD0iUGF0aF80MTgiIGRhdGEtbmFtZT0iUGF0aCA0MTgiIGQ9Ik0xMjIzLjMwNiwyNTguNzc0YTEuNTk0LDEuNTk0LDAsMCwxLS4yNjYsMS4wMjksNC4wODgsNC4wODgsMCwwLDAtLjI1NiwzLjA0LDQuMTYzLDQuMTYzLDAsMCwwLDEuMDU1LDEuODI5LDEuNzQsMS43NCwwLDAsMS0uNjkzLDIuOTU0LDEuNTgzLDEuNTgzLDAsMCwxLTEuNTYzLS4zMzcsNy40MTksNy40MTksMCwwLDEtMS43NC0yLjQ0Nyw2Ljk2OSw2Ljk2OSwwLDAsMS0uNTc1LTEuOTE5LDUuNzEsNS43MSwwLDAsMS0uMDkyLTEuODk0LDExLjU0NiwxMS41NDYsMCwwLDEsLjM4MS0xLjg1OCwzLjE0MSwzLjE0MSwwLDAsMSwxLjEyNi0xLjg2NywxLjc0MiwxLjc0MiwwLDAsMSwyLjUxNi44Yy4wMzEuMDgzLjExNS4xMzcuMTEuMjM5QzEyMjMuMywyNTguNDkzLDEyMjMuMzA2LDI1OC42NDMsMTIyMy4zMDYsMjU4Ljc3NFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xMi4wOTQgLTI0Ljc4OCkiIGZpbGw9IiNmZmYiLz4KICAgIDxwYXRoIGlkPSJQYXRoXzQxOSIgZGF0YS1uYW1lPSJQYXRoIDQxOSIgZD0iTTEyMzUuMiwyNDIuNDA4YTEuNzE1LDEuNzE1LDAsMSwxLC4wMzEtMy40MywxLjcxNSwxLjcxNSwwLDEsMS0uMDMxLDMuNDNaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMjIuODc3IC0xMC4yMzQpIiBmaWxsPSIjZmZmIi8+CiAgPC9nPgo8L3N2Zz4K">
                    <span class="">{{ $prices_x[$loop->index] }}</span>
                  </div>
                  @endif
                </div>
              </div>
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>
    <div class="col-6">
      <div class="p-3 border-bottom border-start product">
        <a href="{{ url('product') }}">
          <div class="row">
            <div class="col-5">
              <img src="{{ asset('assets/9bcfd5a969611b989c9ceddb0a688d44.jpg') }}" class="product-image w-100" alt="...">
            </div>
            <div class="col-7">
              <span class="product-title d-block text-truncate">
                Case for Samsung Note9 10Plus 20 S10 S20 Plus S21 Ultra Pop It Reliver Stress Fidget Toy Push It Bubble Antistress Sensory phone cover
              </span>
              <div class="product-price row justify-content-between px-3">
                <div class="col-6">
                  <img class="mr-3 icon-price" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNCIgaGVpZ2h0PSIxNCIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBpZD0iR3JvdXBfMzIzIiBkYXRhLW5hbWU9Ikdyb3VwIDMyMyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTEyMDMgLTIyNCkiPgogICAgPGNpcmNsZSBpZD0iRWxsaXBzZV8yNjgiIGRhdGEtbmFtZT0iRWxsaXBzZSAyNjgiIGN4PSIxMiIgY3k9IjEyIiByPSIxMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTIwMyAyMjQpIiBmaWxsPSIjYWRkM2ZmIi8+CiAgICA8cGF0aCBpZD0iUGF0aF80MTgiIGRhdGEtbmFtZT0iUGF0aCA0MTgiIGQ9Ik0xMjIzLjMwNiwyNTguNzc0YTEuNTk0LDEuNTk0LDAsMCwxLS4yNjYsMS4wMjksNC4wODgsNC4wODgsMCwwLDAtLjI1NiwzLjA0LDQuMTYzLDQuMTYzLDAsMCwwLDEuMDU1LDEuODI5LDEuNzQsMS43NCwwLDAsMS0uNjkzLDIuOTU0LDEuNTgzLDEuNTgzLDAsMCwxLTEuNTYzLS4zMzcsNy40MTksNy40MTksMCwwLDEtMS43NC0yLjQ0Nyw2Ljk2OSw2Ljk2OSwwLDAsMS0uNTc1LTEuOTE5LDUuNzEsNS43MSwwLDAsMS0uMDkyLTEuODk0LDExLjU0NiwxMS41NDYsMCwwLDEsLjM4MS0xLjg1OCwzLjE0MSwzLjE0MSwwLDAsMSwxLjEyNi0xLjg2NywxLjc0MiwxLjc0MiwwLDAsMSwyLjUxNi44Yy4wMzEuMDgzLjExNS4xMzcuMTEuMjM5QzEyMjMuMywyNTguNDkzLDEyMjMuMzA2LDI1OC42NDMsMTIyMy4zMDYsMjU4Ljc3NFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xMi4wOTQgLTI0Ljc4OCkiIGZpbGw9IiNmZmYiLz4KICAgIDxwYXRoIGlkPSJQYXRoXzQxOSIgZGF0YS1uYW1lPSJQYXRoIDQxOSIgZD0iTTEyMzUuMiwyNDIuNDA4YTEuNzE1LDEuNzE1LDAsMSwxLC4wMzEtMy40MywxLjcxNSwxLjcxNSwwLDEsMS0uMDMxLDMuNDNaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMjIuODc3IC0xMC4yMzQpIiBmaWxsPSIjZmZmIi8+CiAgPC9nPgo8L3N2Zz4K">
                  <span>360</span>
                </div>
                <div class="col-6 text-end text-decoration-line-through">
                  <img class="mr-3 icon-price" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNCIgaGVpZ2h0PSIxNCIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBpZD0iR3JvdXBfMzIzIiBkYXRhLW5hbWU9Ikdyb3VwIDMyMyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTEyMDMgLTIyNCkiPgogICAgPGNpcmNsZSBpZD0iRWxsaXBzZV8yNjgiIGRhdGEtbmFtZT0iRWxsaXBzZSAyNjgiIGN4PSIxMiIgY3k9IjEyIiByPSIxMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTIwMyAyMjQpIiBmaWxsPSIjYWRkM2ZmIi8+CiAgICA8cGF0aCBpZD0iUGF0aF80MTgiIGRhdGEtbmFtZT0iUGF0aCA0MTgiIGQ9Ik0xMjIzLjMwNiwyNTguNzc0YTEuNTk0LDEuNTk0LDAsMCwxLS4yNjYsMS4wMjksNC4wODgsNC4wODgsMCwwLDAtLjI1NiwzLjA0LDQuMTYzLDQuMTYzLDAsMCwwLDEuMDU1LDEuODI5LDEuNzQsMS43NCwwLDAsMS0uNjkzLDIuOTU0LDEuNTgzLDEuNTgzLDAsMCwxLTEuNTYzLS4zMzcsNy40MTksNy40MTksMCwwLDEtMS43NC0yLjQ0Nyw2Ljk2OSw2Ljk2OSwwLDAsMS0uNTc1LTEuOTE5LDUuNzEsNS43MSwwLDAsMS0uMDkyLTEuODk0LDExLjU0NiwxMS41NDYsMCwwLDEsLjM4MS0xLjg1OCwzLjE0MSwzLjE0MSwwLDAsMSwxLjEyNi0xLjg2NywxLjc0MiwxLjc0MiwwLDAsMSwyLjUxNi44Yy4wMzEuMDgzLjExNS4xMzcuMTEuMjM5QzEyMjMuMywyNTguNDkzLDEyMjMuMzA2LDI1OC42NDMsMTIyMy4zMDYsMjU4Ljc3NFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xMi4wOTQgLTI0Ljc4OCkiIGZpbGw9IiNmZmYiLz4KICAgIDxwYXRoIGlkPSJQYXRoXzQxOSIgZGF0YS1uYW1lPSJQYXRoIDQxOSIgZD0iTTEyMzUuMiwyNDIuNDA4YTEuNzE1LDEuNzE1LDAsMSwxLC4wMzEtMy40MywxLjcxNSwxLjcxNSwwLDEsMS0uMDMxLDMuNDNaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMjIuODc3IC0xMC4yMzQpIiBmaWxsPSIjZmZmIi8+CiAgPC9nPgo8L3N2Zz4K">
                  <span>1,199</span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="border-start product">
        <a href="{{ url('product') }}">
          <img src="{{ asset('assets/f4727915eaba02b9372aa1aa4eaa167e.jpg') }}" class="product-image w-100" alt="...">
          <span class="product-title d-block text-truncate px-3 pt-3">
          【24h Shipped】Pop It Push Bubble Phone Case Stress Relief Fidget Toy for iPhone 12 Pro Mini 11 XS Max XR 7 8 Plus
          </span>
          <div class="product-price row justify-content-between px-3">
            <div class="col-6">
              <img class="mr-3 icon-price" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNCIgaGVpZ2h0PSIxNCIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBpZD0iR3JvdXBfMzIzIiBkYXRhLW5hbWU9Ikdyb3VwIDMyMyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTEyMDMgLTIyNCkiPgogICAgPGNpcmNsZSBpZD0iRWxsaXBzZV8yNjgiIGRhdGEtbmFtZT0iRWxsaXBzZSAyNjgiIGN4PSIxMiIgY3k9IjEyIiByPSIxMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTIwMyAyMjQpIiBmaWxsPSIjYWRkM2ZmIi8+CiAgICA8cGF0aCBpZD0iUGF0aF80MTgiIGRhdGEtbmFtZT0iUGF0aCA0MTgiIGQ9Ik0xMjIzLjMwNiwyNTguNzc0YTEuNTk0LDEuNTk0LDAsMCwxLS4yNjYsMS4wMjksNC4wODgsNC4wODgsMCwwLDAtLjI1NiwzLjA0LDQuMTYzLDQuMTYzLDAsMCwwLDEuMDU1LDEuODI5LDEuNzQsMS43NCwwLDAsMS0uNjkzLDIuOTU0LDEuNTgzLDEuNTgzLDAsMCwxLTEuNTYzLS4zMzcsNy40MTksNy40MTksMCwwLDEtMS43NC0yLjQ0Nyw2Ljk2OSw2Ljk2OSwwLDAsMS0uNTc1LTEuOTE5LDUuNzEsNS43MSwwLDAsMS0uMDkyLTEuODk0LDExLjU0NiwxMS41NDYsMCwwLDEsLjM4MS0xLjg1OCwzLjE0MSwzLjE0MSwwLDAsMSwxLjEyNi0xLjg2NywxLjc0MiwxLjc0MiwwLDAsMSwyLjUxNi44Yy4wMzEuMDgzLjExNS4xMzcuMTEuMjM5QzEyMjMuMywyNTguNDkzLDEyMjMuMzA2LDI1OC42NDMsMTIyMy4zMDYsMjU4Ljc3NFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xMi4wOTQgLTI0Ljc4OCkiIGZpbGw9IiNmZmYiLz4KICAgIDxwYXRoIGlkPSJQYXRoXzQxOSIgZGF0YS1uYW1lPSJQYXRoIDQxOSIgZD0iTTEyMzUuMiwyNDIuNDA4YTEuNzE1LDEuNzE1LDAsMSwxLC4wMzEtMy40MywxLjcxNSwxLjcxNSwwLDEsMS0uMDMxLDMuNDNaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMjIuODc3IC0xMC4yMzQpIiBmaWxsPSIjZmZmIi8+CiAgPC9nPgo8L3N2Zz4K">
              <span>519</span>
            </div>
            <div class="col-6 text-end text-decoration-line-through">
              <img class="mr-3 icon-price" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNCIgaGVpZ2h0PSIxNCIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBpZD0iR3JvdXBfMzIzIiBkYXRhLW5hbWU9Ikdyb3VwIDMyMyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTEyMDMgLTIyNCkiPgogICAgPGNpcmNsZSBpZD0iRWxsaXBzZV8yNjgiIGRhdGEtbmFtZT0iRWxsaXBzZSAyNjgiIGN4PSIxMiIgY3k9IjEyIiByPSIxMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTIwMyAyMjQpIiBmaWxsPSIjYWRkM2ZmIi8+CiAgICA8cGF0aCBpZD0iUGF0aF80MTgiIGRhdGEtbmFtZT0iUGF0aCA0MTgiIGQ9Ik0xMjIzLjMwNiwyNTguNzc0YTEuNTk0LDEuNTk0LDAsMCwxLS4yNjYsMS4wMjksNC4wODgsNC4wODgsMCwwLDAtLjI1NiwzLjA0LDQuMTYzLDQuMTYzLDAsMCwwLDEuMDU1LDEuODI5LDEuNzQsMS43NCwwLDAsMS0uNjkzLDIuOTU0LDEuNTgzLDEuNTgzLDAsMCwxLTEuNTYzLS4zMzcsNy40MTksNy40MTksMCwwLDEtMS43NC0yLjQ0Nyw2Ljk2OSw2Ljk2OSwwLDAsMS0uNTc1LTEuOTE5LDUuNzEsNS43MSwwLDAsMS0uMDkyLTEuODk0LDExLjU0NiwxMS41NDYsMCwwLDEsLjM4MS0xLjg1OCwzLjE0MSwzLjE0MSwwLDAsMSwxLjEyNi0xLjg2NywxLjc0MiwxLjc0MiwwLDAsMSwyLjUxNi44Yy4wMzEuMDgzLjExNS4xMzcuMTEuMjM5QzEyMjMuMywyNTguNDkzLDEyMjMuMzA2LDI1OC42NDMsMTIyMy4zMDYsMjU4Ljc3NFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xMi4wOTQgLTI0Ljc4OCkiIGZpbGw9IiNmZmYiLz4KICAgIDxwYXRoIGlkPSJQYXRoXzQxOSIgZGF0YS1uYW1lPSJQYXRoIDQxOSIgZD0iTTEyMzUuMiwyNDIuNDA4YTEuNzE1LDEuNzE1LDAsMSwxLC4wMzEtMy40MywxLjcxNSwxLjcxNSwwLDEsMS0uMDMxLDMuNDNaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMjIuODc3IC0xMC4yMzQpIiBmaWxsPSIjZmZmIi8+CiAgPC9nPgo8L3N2Zz4K">
              <span>899</span>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="row g-0 d-flex d-md-none">
    @php 
    $files = ["assets/f98f1f28fdccf5e455ca80e8fe73f65b.jpg","assets/9bcfd5a969611b989c9ceddb0a688d44.jpg","assets/3978f9982278073db306656b7e1515d9_1624603348.jpg","assets/f4727915eaba02b9372aa1aa4eaa167e.jpg","assets/5dc4dd87f02d4e414bcf2f6cce29a21a.jpg","assets/68f4fbcc2a091945b99f12a55fb6087b.jpg"];
    $names = ["Bandai Tamagotchi The Originals (2)","Case for Samsung Note9 10Plus 20 S10 S20 Plus S21 Ultra Pop It Reliver Stress Fidget Toy Push It Bubble Antistress Sensory phone cover","Infeel.Me 30sheets Portable Cute Sticky Note Cartoon Memo Pad Notepad School Office Supplies","【24h Shipped】Pop It Push Bubble Phone Case Stress Relief Fidget Toy for iPhone 12 Pro Mini 11 XS Max XR 7 8 Plus","Mohamm Cute Japanese diary Korean Journal Stationary Unicorn Craft Paper Stickers Scrapbooking","Pokémon TCG Vivid Voltage Booster Pack"];
    $prices = ["4,639","360","194","519","181","739"];
    $prices_x = ["","1,199","260","899","239",""];
    @endphp
    @foreach($files as $f)
    <div class="border-top border-end product col-6 p-3">
      <a href="{{ url('product') }}">
        <img src="{{ asset($f) }}" class="product-image w-100 mb-2" alt="...">
        <span class="product-title d-block text-truncate">
          {{ $names[$loop->index] }}
        </span>
        <div class="product-price row justify-content-between">
          <div class="col-6">
            <img class="mr-3 icon-price" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNCIgaGVpZ2h0PSIxNCIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBpZD0iR3JvdXBfMzIzIiBkYXRhLW5hbWU9Ikdyb3VwIDMyMyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTEyMDMgLTIyNCkiPgogICAgPGNpcmNsZSBpZD0iRWxsaXBzZV8yNjgiIGRhdGEtbmFtZT0iRWxsaXBzZSAyNjgiIGN4PSIxMiIgY3k9IjEyIiByPSIxMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTIwMyAyMjQpIiBmaWxsPSIjYWRkM2ZmIi8+CiAgICA8cGF0aCBpZD0iUGF0aF80MTgiIGRhdGEtbmFtZT0iUGF0aCA0MTgiIGQ9Ik0xMjIzLjMwNiwyNTguNzc0YTEuNTk0LDEuNTk0LDAsMCwxLS4yNjYsMS4wMjksNC4wODgsNC4wODgsMCwwLDAtLjI1NiwzLjA0LDQuMTYzLDQuMTYzLDAsMCwwLDEuMDU1LDEuODI5LDEuNzQsMS43NCwwLDAsMS0uNjkzLDIuOTU0LDEuNTgzLDEuNTgzLDAsMCwxLTEuNTYzLS4zMzcsNy40MTksNy40MTksMCwwLDEtMS43NC0yLjQ0Nyw2Ljk2OSw2Ljk2OSwwLDAsMS0uNTc1LTEuOTE5LDUuNzEsNS43MSwwLDAsMS0uMDkyLTEuODk0LDExLjU0NiwxMS41NDYsMCwwLDEsLjM4MS0xLjg1OCwzLjE0MSwzLjE0MSwwLDAsMSwxLjEyNi0xLjg2NywxLjc0MiwxLjc0MiwwLDAsMSwyLjUxNi44Yy4wMzEuMDgzLjExNS4xMzcuMTEuMjM5QzEyMjMuMywyNTguNDkzLDEyMjMuMzA2LDI1OC42NDMsMTIyMy4zMDYsMjU4Ljc3NFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xMi4wOTQgLTI0Ljc4OCkiIGZpbGw9IiNmZmYiLz4KICAgIDxwYXRoIGlkPSJQYXRoXzQxOSIgZGF0YS1uYW1lPSJQYXRoIDQxOSIgZD0iTTEyMzUuMiwyNDIuNDA4YTEuNzE1LDEuNzE1LDAsMSwxLC4wMzEtMy40MywxLjcxNSwxLjcxNSwwLDEsMS0uMDMxLDMuNDNaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMjIuODc3IC0xMC4yMzQpIiBmaWxsPSIjZmZmIi8+CiAgPC9nPgo8L3N2Zz4K">
            <span>{{ $prices[$loop->index] }}</span>
          </div>
          @if($prices_x[$loop->index] != "")
          <div class="col-6 text-end text-decoration-line-through">
            <img class="mr-3 icon-price" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNCIgaGVpZ2h0PSIxNCIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBpZD0iR3JvdXBfMzIzIiBkYXRhLW5hbWU9Ikdyb3VwIDMyMyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTEyMDMgLTIyNCkiPgogICAgPGNpcmNsZSBpZD0iRWxsaXBzZV8yNjgiIGRhdGEtbmFtZT0iRWxsaXBzZSAyNjgiIGN4PSIxMiIgY3k9IjEyIiByPSIxMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTIwMyAyMjQpIiBmaWxsPSIjYWRkM2ZmIi8+CiAgICA8cGF0aCBpZD0iUGF0aF80MTgiIGRhdGEtbmFtZT0iUGF0aCA0MTgiIGQ9Ik0xMjIzLjMwNiwyNTguNzc0YTEuNTk0LDEuNTk0LDAsMCwxLS4yNjYsMS4wMjksNC4wODgsNC4wODgsMCwwLDAtLjI1NiwzLjA0LDQuMTYzLDQuMTYzLDAsMCwwLDEuMDU1LDEuODI5LDEuNzQsMS43NCwwLDAsMS0uNjkzLDIuOTU0LDEuNTgzLDEuNTgzLDAsMCwxLTEuNTYzLS4zMzcsNy40MTksNy40MTksMCwwLDEtMS43NC0yLjQ0Nyw2Ljk2OSw2Ljk2OSwwLDAsMS0uNTc1LTEuOTE5LDUuNzEsNS43MSwwLDAsMS0uMDkyLTEuODk0LDExLjU0NiwxMS41NDYsMCwwLDEsLjM4MS0xLjg1OCwzLjE0MSwzLjE0MSwwLDAsMSwxLjEyNi0xLjg2NywxLjc0MiwxLjc0MiwwLDAsMSwyLjUxNi44Yy4wMzEuMDgzLjExNS4xMzcuMTEuMjM5QzEyMjMuMywyNTguNDkzLDEyMjMuMzA2LDI1OC42NDMsMTIyMy4zMDYsMjU4Ljc3NFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xMi4wOTQgLTI0Ljc4OCkiIGZpbGw9IiNmZmYiLz4KICAgIDxwYXRoIGlkPSJQYXRoXzQxOSIgZGF0YS1uYW1lPSJQYXRoIDQxOSIgZD0iTTEyMzUuMiwyNDIuNDA4YTEuNzE1LDEuNzE1LDAsMSwxLC4wMzEtMy40MywxLjcxNSwxLjcxNSwwLDEsMS0uMDMxLDMuNDNaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMjIuODc3IC0xMC4yMzQpIiBmaWxsPSIjZmZmIi8+CiAgPC9nPgo8L3N2Zz4K">
            <span class="">{{ $prices_x[$loop->index] }}</span>
          </div>
          @endif
        </div>
      </a>
    </div>
    @endforeach
  </div>
</div>