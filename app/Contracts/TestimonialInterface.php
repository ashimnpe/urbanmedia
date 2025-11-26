<?php

namespace App\Contracts;


interface TestimonialInterface
{
    function getAll();
    function getTestimonialById($id);
    function createTestimonial($request);
    function updateTestimonial($request, $id);
    function deleteTestimonial($id);
}
