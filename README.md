# Laravel Dynamic
Uses Tailwind 3, Alpine, Livewire 3, Laravel 11 + DaisyUI 4 Soon 5, Redis, ~~Laravel Octane~~

# Roadmap
**Current Functionality:**
- Dynamic Navbar
- Dynamic Footer

**In progress:**
- Dynamic CRUD Table with REST API support
- Caching system for SPA

**Future components:**
- Dynamic Sidebar
- AJAX modal form
- Filters
- Dynamic authentication
- Dynamic stepper
- Searchbar
- Dynamic third party api

```
php artisan make:livewire componentName
```

## How to use
**Example Navbar**
```
@livewire('navbar', ['navbarItems' => [
  'home',
      ['name' => 'Users', 'url' => route('users.index')],
  ]])
```

**Example Sidebar**
```
@livewire('sidebar', ['sections' => [
    [
        'title' => 'Services',
        'links' => [
            ['name' => 'Branding', 'url' => route('placeholder')],
            ['name' => 'Design', 'url' => route('placeholder')],
            ['name' => 'Marketing', 'url' => route('placeholder')],
            ['name' => 'Advertisement', 'url' => route('placeholder')],
        ],
    ],
]])
```

**Example Footer**
```
@livewire('footer', ['sections' => [
  [
  'title' => 'Services',
  'links' => [
      ['name' => 'Branding', 'url' => route('placeholder')],  // Custom URL
      ['name' => 'Design', =>,  // Defaults to route('design') if no 'url' is provided
      ['name' => 'Marketing', 'url' => route('placeholder')],
      ['name' => 'Advertisement', 'url' => route('placeholder')],
      ],
  ],
  [
      'title' => 'Company',
      'links' => [
          ['name' => 'About us', 'url' => route('placeholder')],
          ['name' => 'Contact', 'url' => route('placeholder')],
          ['name' => 'Jobs', 'url' => route('placeholder')],
          ['name' => 'Press kit', 'url' => route('placeholder')],
      ],
  ],
  [
      'title' => 'Legal',
      'links' => [
          ['name' => 'Terms of use', 'url' => route('placeholder')],
          ['name' => 'Privacy policy', 'url' => route('placeholder')],
          ['name' => 'Cookie policy', 'url' => route('placeholder')],
      ],
  ],
]])
```

**Example CRUD Table**
```
@livewire('crud-table', [
    'model' => \App\Models\User::class,
    'columns' => [
        ['label' => ' ', 'field' => 'profile_picture_url', 'image' => true], // 'label' is a blank space, this fakes an empty label, it will need a 'field'
        ['field' => 'name'], // 'label' is specified as 'Name'
        ['field' => 'email'], // 'label' is specified as 'Email'
        ['label' => 'Job', 'field' => 'job_title'], // 'label' is specified as 'Job' and 'field' is 'job_title'
    ],
])
```
