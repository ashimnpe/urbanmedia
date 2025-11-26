<?php

namespace App\Services;

use App\Contracts\TestimonialInterface;
use App\Models\Testimonial;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TestimonialService implements TestimonialInterface
{
    public function getAll()
    {
        $testimonial = Testimonial::orderBy('id', 'desc')->with('media')->get();
        return $testimonial;
    }

    public function getTestimonialById($id)
    {
        try {
            $testimonial = Testimonial::with('media')->find($id);
            return $testimonial;
        } catch (Exception $e) {
            throw new Exception('Testimonial not found', 404);
        }
    }

    public function createTestimonial($request)
    {
        $dataValidate = $request->validated();

        DB::beginTransaction();
        try {
            $testimonial = Testimonial::create($dataValidate);
            if ($request->hasFile('photo')) {
                $testimonial->addMedia(file: $request->file('photo'))->toMediaCollection(collectionName: 'testimonials');
            }
            DB::commit();
            return $testimonial;
        } catch (Exception $ex) {
            DB::rollBack();
            throw new Exception("Error creating Testimonial", 500);
        }
    }

    public function updateTestimonial($request, $id)
    {
        $existingTestimonial = $this->getTestimonialById($id);
        $dataValidate = $request->validated();
        try {
            $existingTestimonial->update($dataValidate);
            if ($request->hasFile('photo')) {
                $existingTestimonial->clearMediaCollection('testimonials');
                $existingTestimonial->addMedia(file: $request->file('photo'))->toMediaCollection(collectionName: 'testimonials');
            }
            return $existingTestimonial;
        } catch (Exception $ex) {
            throw new Exception("Error Updating Testimonial, $ex", 500);
        }
    }

    public function deleteTestimonial($id)
    {
        $testimonial = $this->getTestimonialById($id);
        try {
            $testimonial->delete();
        } catch (Exception $e) {
            throw new Exception("Error deleting Testimonial", 500);
        }
    }
}
