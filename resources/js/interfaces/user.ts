export interface IUserResponse {
    data: IUser[]
    message: string
    success: boolean
}

export interface IUserSingleResponse {
    data: IUser
    message: string
    success: boolean
}

export interface IUser {
    name: string
    email: string
    password: string
    password_confirmation: string
    role: string
    id: number
    created_at?: string
    updated_at?: string
}
