import * as React from "react";
import * as ToastPrimitive from "@radix-ui/react-toast";
import { cn } from "@/lib/utils";

export const ToastProvider = ToastPrimitive.Provider;

export const ToastViewport = React.forwardRef<
    React.ElementRef<typeof ToastPrimitive.Viewport>,
    React.ComponentPropsWithoutRef<typeof ToastPrimitive.Viewport>
>(({ className, ...props }, ref) => (
    <ToastPrimitive.Viewport
        ref={ref}
        className={cn(
            "fixed bottom-4 right-4 flex w-auto flex-col gap-2 p-4 z-[100]",
            className
        )}
        {...props}
    />
));
ToastViewport.displayName = ToastPrimitive.Viewport.displayName;

export const Toast = React.forwardRef<
    React.ElementRef<typeof ToastPrimitive.Root>,
    React.ComponentPropsWithoutRef<typeof ToastPrimitive.Root>
>(({ className, ...props }, ref) => (
    <ToastPrimitive.Root
        ref={ref}
        className={cn(
            "relative flex items-center space-x-2 rounded-lg border px-4 py-3 shadow-md",
            className
        )}
        {...props}
    />
));
Toast.displayName = ToastPrimitive.Root.displayName;

export const ToastTitle = React.forwardRef<
    React.ElementRef<typeof ToastPrimitive.Title>,
    React.ComponentPropsWithoutRef<typeof ToastPrimitive.Title>
>(({ className, ...props }, ref) => (
    <ToastPrimitive.Title
        ref={ref}
        className={cn("font-medium", className)}
        {...props}
    />
));
ToastTitle.displayName = ToastPrimitive.Title.displayName;

export const ToastDescription = React.forwardRef<
    React.ElementRef<typeof ToastPrimitive.Description>,
    React.ComponentPropsWithoutRef<typeof ToastPrimitive.Description>
>(({ className, ...props }, ref) => (
    <ToastPrimitive.Description
        ref={ref}
        className={cn("text-sm opacity-80", className)}
        {...props}
    />
));
ToastDescription.displayName = ToastPrimitive.Description.displayName;

export const ToastAction = React.forwardRef<
    React.ElementRef<typeof ToastPrimitive.Action>,
    React.ComponentPropsWithoutRef<typeof ToastPrimitive.Action>
>(({ className, ...props }, ref) => (
    <ToastPrimitive.Action
        ref={ref}
        className={cn("text-blue-500 hover:underline", className)}
        {...props}
    />
));
ToastAction.displayName = ToastPrimitive.Action.displayName;
