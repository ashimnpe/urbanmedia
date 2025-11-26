export interface ITestimonialResponse {
    data: ITestimonial[]
    message: string
    success: boolean
}

export interface ITestimonialSingleResponse {
    data: ITestimonial
    message: string
    success: boolean
}

export interface ITestimonialRequestPayload {
    name: string
    designation: string
    company: string
    feed: string
    photo: File | null
    is_featured: boolean
    id?: number
}

export interface ITestimonial extends ITestimonialRequestPayload {
    id: number
    slug?: string
    media?: IMedia[]
    created_at?: string
    updated_at?: string
}

export interface IMedia {
    collection_name: string
    original_url: string
    file_name: string
    uuid: string
}