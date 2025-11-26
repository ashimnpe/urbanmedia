export interface IContactResponse {
    data: IContact[]
    message: string
    success: boolean
}

export interface IContact {
    name: string
    email: string
    phone: string
    subject: string
    message: string
    id: number
}
