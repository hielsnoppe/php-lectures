# Laravel Examples

## User profile image upload

Create controller and views:

    artisan make:controller UserProfileController
    artisan make:view profile_view
    artisan make:view profile_edit

Create functions in `UserProfileController`:

    public function view(Request $request) {}
    public function edit(Request $request) {}
    public function update(Request $request) {}

Register routes in `web.php`:

    Route::get('/profile', [UserProfileController::class, 'view']);
    Route::get('/profile/edit', [UserProfileController::class, 'edit']);
    Route::post('/profile/edit', [UserProfileController::class, 'update']);

**Ab hier unfertig, noch nicht weiter!**

Create model and migration:
    
    artisan make:model -m UserProfile