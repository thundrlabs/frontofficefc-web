<?php

use App\Models\WaitlistSignup;
use Livewire\Livewire;

it('stores a valid email on the waitlist', function () {
    Livewire::test('waitlist-form')
        ->set('email', 'gaffer@frontofficefc.com')
        ->call('join')
        ->assertHasNoErrors()
        ->assertSet('submitted', true);

    expect(WaitlistSignup::where('email', 'gaffer@frontofficefc.com')->exists())->toBeTrue();
});

it('rejects an invalid email', function () {
    Livewire::test('waitlist-form')
        ->set('email', 'not-an-email')
        ->call('join')
        ->assertHasErrors(['email' => 'email'])
        ->assertSet('submitted', false);

    expect(WaitlistSignup::count())->toBe(0);
});

it('rejects a duplicate email', function () {
    WaitlistSignup::factory()->create(['email' => 'taken@frontofficefc.com']);

    Livewire::test('waitlist-form')
        ->set('email', 'taken@frontofficefc.com')
        ->call('join')
        ->assertHasErrors(['email' => 'unique'])
        ->assertSet('submitted', false);

    expect(WaitlistSignup::count())->toBe(1);
});

it('renders the waitlist form on the homepage', function () {
    $this->get(route('home'))
        ->assertOk()
        ->assertSeeLivewire('waitlist-form');
});
