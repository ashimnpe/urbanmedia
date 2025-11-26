<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\TestimonialInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TestimonialRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TestimonialController extends Controller
{
    protected TestimonialInterface $testimonialService;

    public function __construct(TestimonialInterface $testimonialService)
    {
        $this->testimonialService = $testimonialService;
    }

    public function index()
    {
        $testimonial = $this->testimonialService->getAll();
        return Inertia::render('testimonial', ['testimonials' => $testimonial]);
    }

    public function store(TestimonialRequest $request)
    {
        $testimonial = $this->testimonialService->createTestimonial($request);
        return Inertia::render('testimonial', ['testimonial' => $testimonial]);
    }

    public function update(TestimonialRequest $request, $id)
    {
        $testimonial = $this->testimonialService->updateTestimonial($request, $id);
        return Inertia::render('testimonial', ['testimonial' => $testimonial]);
    }

    public function destroy($id)
    {
        $testimonial = $this->testimonialService->deleteTestimonial($id);
        if ($testimonial) {
            return Inertia::render('testimonial', ['testimonial' => $testimonial]);
        } else {
            return "Testimonial Not Found";
        }
    }
}
