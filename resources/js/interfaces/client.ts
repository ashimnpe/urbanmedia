export interface IClientResponse {
    data: IClient[]
    message: string
    success: boolean
}

export interface IClientSingleResponse {
    data: IClient
    message: string
    success: boolean
}

export interface IClientRequestPayload {
    name: string
    photo: File | null
    id?: number
    order: number
}

export interface IClient extends IClientRequestPayload {
    id: number
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
