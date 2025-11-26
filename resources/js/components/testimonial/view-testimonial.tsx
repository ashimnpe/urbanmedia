import { Button } from '@/components/ui/button';
import { Eye } from 'lucide-react';
import { Dialog, DialogClose, DialogFooter, DialogContent, DialogTitle, DialogDescription, DialogTrigger } from '@/components/ui/dialog';
import { ITestimonial } from '@/interfaces/testimonial';

export default function ViewTestimonial({ testimonial }: { testimonial: ITestimonial }) {
    return (
        <div className="space-y-6">
            <Dialog>
                <DialogTrigger asChild>
                    <Button variant="ghost" className='cursor-pointer border'> <Eye />View</Button>
                </DialogTrigger>
                <DialogContent className="DialogContent" aria-describedby="blog-content">
                    <DialogTitle>
                        Testimonial Details
                    </DialogTitle>
                    <DialogDescription asChild>
                        <dl className="mt-4">
                            <img src={testimonial.media?.[0]?.original_url || 'path/to/no-image.png'} alt={testimonial.name} className="mt-2 w-25 h-25 object-cover rounded-md" />

                            <div className="content mt-3">
                                <h2 className="text-lg font-bold">{testimonial.name}</h2>
                                <em>{testimonial.designation}</em>
                                <p className='mt-3 text-justify' style={{ fontSize: '16px' }}>{testimonial.feed}</p>
                            </div>
                        </dl>
                    </DialogDescription>
                    <DialogFooter className="gap-2 mt-3">
                        <DialogClose asChild>
                            <Button variant="outline" className='cursor-pointer'>
                                Close
                            </Button>
                        </DialogClose>
                    </DialogFooter>
                </DialogContent>
            </Dialog>
        </div>
    );
}
