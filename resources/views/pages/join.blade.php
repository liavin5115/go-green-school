@extends('layouts.app')

@section('title', 'Join — Go Green School')
@section('meta_description', 'Join the Go Green School movement. Register your school or sign up as a student, teacher, or parent to help build eco-friendly schools in Indonesia.')

@section('content')

{{-- PAGE HEADER --}}
<section class="w-full border-b border-slate-200 dark:border-slate-800 bg-background-dark px-6 py-14">
    <div class="mx-auto max-w-7xl text-center text-white">
        <span class="material-symbols-outlined mb-4 text-6xl text-primary">group_add</span>
        <h1 class="text-3xl font-bold tracking-tight mb-2" data-i18n="join_title">Join Go Green School</h1>
        <p class="text-lg text-slate-300" data-i18n="join_subtitle">Be part of the movement to make schools greener across Indonesia.</p>
    </div>
</section>

{{-- JOIN FORM --}}
<section class="mx-auto w-full max-w-2xl px-6 py-16">
    <div class="rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-8 md:p-10 shadow-sm animate-slide-up">
        <form action="#" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-1.5" data-i18n="join_name">Full Name</label>
                <input type="text" name="name" required data-i18n="join_name">
            </div>
            <div>
                <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-1.5" data-i18n="join_email">Email Address</label>
                <input type="email" name="email" required data-i18n="join_email">
            </div>
            <div>
                <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-1.5" data-i18n="join_school">School Name</label>
                <input type="text" name="school" required data-i18n="join_school">
            </div>
            <div>
                <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-1.5" data-i18n="join_role">Your Role</label>
                <select name="role" required>
                    <option value="student" data-i18n="join_role_student">Student</option>
                    <option value="teacher" data-i18n="join_role_teacher">Teacher</option>
                    <option value="parent" data-i18n="join_role_parent">Parent</option>
                    <option value="other" data-i18n="join_role_other">Other</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-1.5" data-i18n="join_message">Why do you want to join?</label>
                <textarea name="message" rows="4" data-i18n="join_message"></textarea>
            </div>
            <div class="pt-2">
                <button type="submit" class="w-full flex items-center justify-center rounded-lg h-12 bg-primary hover:bg-green-500 transition-colors text-slate-900 font-bold text-base btn-animated" data-i18n="join_submit">
                    Submit
                </button>
            </div>
        </form>
    </div>
</section>

@endsection
