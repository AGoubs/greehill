<div>
  @foreach ($languages as $language)
    <article class="feature">
      <input type="radio" id="language{{ $language->id }}" name="language" />

      <div>
        <label for="language{{ $language->id }}" style="margin-top: -5px;"><span class="fi fi-{{ $language->abbreviation }}" style="width:50px;height: 30px;"></span></label>
      </div>
    </article>
  @endforeach
</div>
