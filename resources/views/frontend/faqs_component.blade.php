<section class="container-fluid py-5 px-4 bg-white" style="border-bottom: 3px solid #ebc266; border-right: 3px solid #ebc266">
    <div class="row">
        <h3 class="text-dark text-uppercase fw-bolder text-center">FAQs</h3>
    </div>
    <div class="row bg-white">
        <div class="col-lg-12 bg-white">
            <div class="accordion accordion-flush bg-white" id="accordionFlushExample">
                @if (count($faqsData) > 0)
                    @foreach ($faqsData as $faq)
                        <div class="accordion-item bg-white border-0">
                            <h2 class="accordion-header bg-white border-0">
                                <button class="mb-2 accordion-button collapsed fw-bolder text-dark border-bottom border-warning btn btn-outline-warning" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $loop->index + 1 }}"
                                    aria-expanded="false" aria-controls="flush-collapse{{ $loop->index + 1 }}" style="border-radius: 20px">
                                    {{ $faq['question'] }}
                                </button>
                            </h2>
                            <div id="flush-collapse{{ $loop->index + 1 }}" class="accordion-collapse collapse bg-white"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body bg-white text-dark">{!! $faq['answer'] !!}</div>
                                <hr class="border-bottom border-warning px-4 mx-4">
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="alert alert-light" role="alert">
                        No FAQ's found.
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>