<?php

it('renders the Front Office FC landing page', function () {
    $this->get(route('home'))
        ->assertOk()
        ->assertSee('Front Office FC')
        ->assertSee('The club is yours to build.')
        ->assertSee('info@frontofficefc.com');
});
