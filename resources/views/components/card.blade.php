<div class="card">
  <div class="s-6 card-left">
    <img data-src="{{ $education->img }}" class="responsive card-image lazyload" alt="{{ $education->school }}"/>
  </div>
  <div class="s-6 card-right">
    <div class="information">
        <p>
            <strong>{{ $education->school }}</strong>
        </p>
        <p>{{ $education->description }}</p>
        <p>{{ $education->age }}</p>
    </div>
  </div>
</div>
