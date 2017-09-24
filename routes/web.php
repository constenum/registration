<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
 * Authorization resources
 */
Auth::routes();

# Index page once authenticated
Route::name('home')->get('/home', 'HomeController@index');

/*
* About resource
*/
# Index page to show all about
Route::name('about.index')->get('/about', 'AboutController@index');

# Show form to create a new About
Route::name('about.create')->get('/about/create', 'AboutController@create');

# Process the form to create a new About
Route::name('about.store')->post('/about', 'AboutController@store');

# Show an individual About
Route::name('about.show')->get('/about/{title}', 'AboutController@show');

# Show form to edit a About
Route::name('about.edit')->get('/about/{id}/edit', 'AboutController@edit');

# Process form to edit a About
Route::name('update')->put('/about/{id}', 'AboutController@update');

# Get route to confirm deletion of About
Route::name('about.destroy')->get('/about/{id}/delete', 'AboutController@delete');

# Delete route to actually destroy the About
Route::name('about.destroy')->delete('/about/{id}', 'AboutController@destroy');

/*
* Activity resource
*/
# Index page to show all activity
Route::name('activity.index')->get('/activity', 'ActivityController@index');

# Show form to create a new Activity
Route::name('activity.create')->get('/activity/create', 'ActivityController@create');

# Process the form to create a new Activity
Route::name('activity.store')->post('/activity', 'ActivityController@store');

# Show an individual Activity
Route::name('activity.show')->get('/activity/{title}', 'ActivityController@show');

# Show form to edit a Activity
Route::name('activity.edit')->get('/activity/{id}/edit', 'ActivityController@edit');

# Process form to edit a Activity
Route::name('update')->put('/activity/{id}', 'ActivityController@update');

# Get route to confirm deletion of Activity
Route::name('activity.destroy')->get('/activity/{id}/delete', 'ActivityController@delete');

# Delete route to actually destroy the Activity
Route::name('activity.destroy')->delete('/activity/{id}', 'ActivityController@destroy');

/*
* Decision resource
*/
# Index page to show all decision
Route::name('decision.index')->get('/decision', 'DecisionController@index');

# Show form to create a new Decision
Route::name('decision.create')->get('/decision/create', 'DecisionController@create');

# Process the form to create a new Decision
Route::name('decision.store')->post('/decision', 'DecisionController@store');

# Show an individual Decision
Route::name('decision.show')->get('/decision/{title}', 'DecisionController@show');

# Show form to edit a Decision
Route::name('decision.edit')->get('/decision/{id}/edit', 'DecisionController@edit');

# Process form to edit a Decision
Route::name('update')->put('/decision/{id}', 'DecisionController@update');

# Get route to confirm deletion of Decision
Route::name('decision.destroy')->get('/decision/{id}/delete', 'DecisionController@delete');

# Delete route to actually destroy the Decision
Route::name('decision.destroy')->delete('/decision/{id}', 'DecisionController@destroy');

/*
* Factor resource
*/
# Index page to show all factor
Route::name('factor.index')->get('/factor', 'FactorController@index');

# Show form to create a new Factor
Route::name('factor.create')->get('/factor/create', 'FactorController@create');

# Process the form to create a new Factor
Route::name('factor.store')->post('/factor', 'FactorController@store');

# Show an individual Factor
Route::name('factor.show')->get('/factor/{title}', 'FactorController@show');

# Show form to edit a Factor
Route::name('factor.edit')->get('/factor/{id}/edit', 'FactorController@edit');

# Process form to edit a Factor
Route::name('update')->put('/factor/{id}', 'FactorController@update');

# Get route to confirm deletion of Factor
Route::name('factor.destroy')->get('/factor/{id}/delete', 'FactorController@delete');

# Delete route to actually destroy the Factor
Route::name('factor.destroy')->delete('/factor/{id}', 'FactorController@destroy');

/*
* Guardian resource
*/
# Index page to show all guardian
Route::name('guardian.index')->get('/guardian', 'GuardianController@index');

# Show form to create a new Guardian
Route::name('guardian.create')->get('/guardian/create', 'GuardianController@create');

# Process the form to create a new Guardian
Route::name('guardian.store')->post('/guardian', 'GuardianController@store');

# Show an individual Guardian
Route::name('guardian.show')->get('/guardian/{title}', 'GuardianController@show');

# Show form to edit a Guardian
Route::name('guardian.edit')->get('/guardian/{id}/edit', 'GuardianController@edit');

# Process form to edit a Guardian
Route::name('update')->put('/guardian/{id}', 'GuardianController@update');

# Get route to confirm deletion of Guardian
Route::name('guardian.destroy')->get('/guardian/{id}/delete', 'GuardianController@delete');

# Delete route to actually destroy the Guardian
Route::name('guardian.destroy')->delete('/guardian/{id}', 'GuardianController@destroy');

/*
* Household resource
*/
# Index page to show all household
Route::name('household.index')->get('/household', 'HouseholdController@index');

# Show form to create a new Household
Route::name('household.create')->get('/household/create', 'HouseholdController@create');

# Process the form to create a new Household
Route::name('household.store')->post('/household', 'HouseholdController@store');

# Show an individual Household
Route::name('household.show')->get('/household/{title}', 'HouseholdController@show');

# Show form to edit a Household
Route::name('household.edit')->get('/household/{id}/edit', 'HouseholdController@edit');

# Process form to edit a Household
Route::name('update')->put('/household/{id}', 'HouseholdController@update');

# Get route to confirm deletion of Household
Route::name('household.destroy')->get('/household/{id}/delete', 'HouseholdController@delete');

# Delete route to actually destroy the Household
Route::name('household.destroy')->delete('/household/{id}', 'HouseholdController@destroy');

/*
* Relationship resource
*/
# Index page to show all relationship
Route::name('relationship.index')->get('/relationship', 'RelationshipController@index');

# Show form to create a new Relationship
Route::name('relationship.create')->get('/relationship/create', 'RelationshipController@create');

# Process the form to create a new Relationship
Route::name('relationship.store')->post('/relationship', 'RelationshipController@store');

# Show an individual Relationship
Route::name('relationship.show')->get('/relationship/{title}', 'RelationshipController@show');

# Show form to edit a Relationship
Route::name('relationship.edit')->get('/relationship/{id}/edit', 'RelationshipController@edit');

# Process form to edit a Relationship
Route::name('update')->put('/relationship/{id}', 'RelationshipController@update');

# Get route to confirm deletion of Relationship
Route::name('relationship.destroy')->get('/relationship/{id}/delete', 'RelationshipController@delete');

# Delete route to actually destroy the Relationship
Route::name('relationship.destroy')->delete('/relationship/{id}', 'RelationshipController@destroy');

/*
* Relative resource
*/
# Index page to show all relative
Route::name('relative.index')->get('/relative', 'RelativeController@index');

# Show form to create a new Relative
Route::name('relative.create')->get('/relative/create', 'RelativeController@create');

# Process the form to create a new Relative
Route::name('relative.store')->post('/relative', 'RelativeController@store');

# Show an individual Relative
Route::name('relative.show')->get('/relative/{title}', 'RelativeController@show');

# Show form to edit a Relative
Route::name('relative.edit')->get('/relative/{id}/edit', 'RelativeController@edit');

# Process form to edit a Relative
Route::name('update')->put('/relative/{id}', 'RelativeController@update');

# Get route to confirm deletion of Relative
Route::name('relative.destroy')->get('/relative/{id}/delete', 'RelativeController@delete');

# Delete route to actually destroy the Relative
Route::name('relative.destroy')->delete('/relative/{id}', 'RelativeController@destroy');

/*
* Sport resource
*/
# Index page to show all sport
Route::name('sport.index')->get('/sport', 'SportController@index');

# Show form to create a new Sport
Route::name('sport.create')->get('/sport/create', 'SportController@create');

# Process the form to create a new Sport
Route::name('sport.store')->post('/sport', 'SportController@store');

# Show an individual Sport
Route::name('sport.show')->get('/sport/{title}', 'SportController@show');

# Show form to edit a Sport
Route::name('sport.edit')->get('/sport/{id}/edit', 'SportController@edit');

# Process form to edit a Sport
Route::name('update')->put('/sport/{id}', 'SportController@update');

# Get route to confirm deletion of Sport
Route::name('sport.destroy')->get('/sport/{id}/delete', 'SportController@delete');

# Delete route to actually destroy the Sport
Route::name('sport.destroy')->delete('/sport/{id}', 'SportController@destroy');

/*
* Student resource
*/
# Index page to show all student
Route::name('student.index')->get('/student', 'StudentController@index');

# Show form to create a new Student
Route::name('student.create')->get('/student/create', 'StudentController@create');

# Process the form to create a new Student
Route::name('student.store')->post('/student', 'StudentController@store');

# Show an individual Student
Route::name('student.show')->get('/student/{title}', 'StudentController@show');

# Show form to edit a Student
Route::name('student.edit')->get('/student/{id}/edit', 'StudentController@edit');

# Process form to edit a Student
Route::name('update')->put('/student/{id}', 'StudentController@update');

# Get route to confirm deletion of Student
Route::name('student.destroy')->get('/student/{id}/delete', 'StudentController@delete');

# Delete route to actually destroy the Student
Route::name('student.destroy')->delete('/student/{id}', 'StudentController@destroy');

/*
* Visitation resource
*/
# Index page to show all visitation
Route::name('visitation.index')->get('/visitation', 'VisitationController@index');

# Show form to create a new Visitation
Route::name('visitation.create')->get('/visitation/create', 'VisitationController@create');

# Process the form to create a new Visitation
Route::name('visitation.store')->post('/visitation', 'VisitationController@store');

# Show an individual Visitation
Route::name('visitation.show')->get('/visitation/{title}', 'VisitationController@show');

# Show form to edit a Visitation
Route::name('visitation.edit')->get('/visitation/{id}/edit', 'VisitationController@edit');

# Process form to edit a Visitation
Route::name('update')->put('/visitation/{id}', 'VisitationController@update');

# Get route to confirm deletion of Visitation
Route::name('visitation.destroy')->get('/visitation/{id}/delete', 'VisitationController@delete');

# Delete route to actually destroy the Visitation
Route::name('visitation.destroy')->delete('/visitation/{id}', 'VisitationController@destroy');

/*
* OpenHouse resource
*/
# Index page to show all open_house
Route::name('open_house.index')->get('/open_house', 'OpenHouseController@index');

# Show form to create a new OpenHouse
Route::name('open_house.create')->get('/open_house/create', 'OpenHouseController@create');

# Process the form to create a new OpenHouse
Route::name('open_house.store')->post('/open_house', 'OpenHouseController@store');

# Show an individual OpenHouse
Route::name('open_house.show')->get('/open_house/{title}', 'OpenHouseController@show');

# Show form to edit a OpenHouse
Route::name('open_house.edit')->get('/open_house/{id}/edit', 'OpenHouseController@edit');

# Process form to edit a OpenHouse
Route::name('update')->put('/open_house/{id}', 'OpenHouseController@update');

# Get route to confirm deletion of OpenHouse
Route::name('open_house.destroy')->get('/open_house/{id}/delete', 'OpenHouseController@delete');

# Delete route to actually destroy the OpenHouse
Route::name('open_house.destroy')->delete('/open_house/{id}', 'OpenHouseController@destroy');

/*
* Shadow resource
*/
# Index page to show all shadow
Route::name('shadow.index')->get('/shadow', 'ShadowController@index');

# Show form to create a new Shadow
Route::name('shadow.create')->get('/shadow/create', 'ShadowController@create');

# Process the form to create a new Shadow
Route::name('shadow.store')->post('/shadow', 'ShadowController@store');

# Show an individual Shadow
Route::name('shadow.show')->get('/shadow/{title}', 'ShadowController@show');

# Show form to edit a Shadow
Route::name('shadow.edit')->get('/shadow/{id}/edit', 'ShadowController@edit');

# Process form to edit a Shadow
Route::name('update')->put('/shadow/{id}', 'ShadowController@update');

# Get route to confirm deletion of Shadow
Route::name('shadow.destroy')->get('/shadow/{id}/delete', 'ShadowController@delete');

# Delete route to actually destroy the Shadow
Route::name('shadow.destroy')->delete('/shadow/{id}', 'ShadowController@destroy');
