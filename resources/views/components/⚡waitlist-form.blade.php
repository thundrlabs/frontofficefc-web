<?php

use App\Models\WaitlistSignup;
use Livewire\Attributes\Validate;
use Livewire\Component;

new class extends Component
{
    #[Validate('required|email|max:255|unique:waitlist_signups,email')]
    public string $email = '';

    public bool $submitted = false;

    /**
     * Store the visitor's email on the launch waitlist.
     */
    public function join(): void
    {
        $validated = $this->validate();

        WaitlistSignup::create($validated);

        $this->submitted = true;
    }
}; ?>

<div class="max-w-md">
    @if ($submitted)
        <div class="flex items-start gap-3 rounded-lg bg-pitch-50 p-4 ring-1 ring-pitch-600/15 ring-inset">
            <svg viewBox="0 0 20 20" fill="currentColor" class="mt-0.5 size-5 shrink-0 text-pitch-600" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
            </svg>
            <div>
                <p class="font-medium text-pitch-800">You're on the list.</p>
                <p class="mt-1 text-sm text-pitch-700">We'll email you the moment Front Office FC kicks off.</p>
            </div>
        </div>
    @else
        <form wire:submit="join" novalidate>
            <label for="waitlist-email" class="text-sm font-medium text-zinc-700">Get launch updates</label>
            <div class="mt-2 flex flex-col gap-3 sm:flex-row">
                <input id="waitlist-email" name="email" type="email" required autocomplete="email" placeholder="you@example.com"
                    wire:model="email"
                    aria-describedby="waitlist-email-error"
                    class="w-full rounded-lg bg-white px-4 py-3 text-base text-zinc-900 ring-1 ring-zinc-950/10 placeholder:text-zinc-400 focus:outline-2 focus:-outline-offset-1 focus:outline-pitch-500 aria-invalid:ring-red-500" />
                <button type="submit"
                    class="shrink-0 rounded-lg bg-pitch-500 px-5 py-3 text-base font-semibold text-white ring-1 ring-pitch-500 hover:bg-pitch-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pitch-500">
                    <span wire:loading.remove wire:target="join">Notify me</span>
                    <span wire:loading wire:target="join">Joining…</span>
                </button>
            </div>
            @error('email')
                <p id="waitlist-email-error" class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </form>
    @endif
</div>
