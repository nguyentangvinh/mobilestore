@foreach ($sliders as $slider)
<section class="welcome_area bg-img background-overlay" style="background-image: url({{ $slider->thumb }}); background-size: unset;">
    <div class="container h-100">
    </div>
</section>
@endforeach
