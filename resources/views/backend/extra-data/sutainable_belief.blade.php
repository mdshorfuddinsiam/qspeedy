<section class="py-5">
  <div class="container">
    <div class="content">
      <h2 class="section-header">A Sustainable Believe:</h2>
      <div class="section-header-underline"></div>
    </div>
    <div class="row justify-content-center align-items-center">

      @forelse($believes as $row)
      <div class="col-md-4" style="position: relative;">
        <img src="{{ asset($row->image) }}" style="border-radius: 50%; height: 300px; width: 300px;" />
        <div class="centered" style="margin-left: -27px;">
          <div style="background-color: rgb(0,0,0,0.5); height: 250px; width: 250px; border-radius: 50%;">
            <div style="padding-top: 120px; padding-left: 10px;">
              <p class="text-white text-center"> {{ $row->title }} </p>
            </div>
          </div>
        </div>
      </div>
      @empty
      @endforelse
      

    </div>
  </div>
</section>