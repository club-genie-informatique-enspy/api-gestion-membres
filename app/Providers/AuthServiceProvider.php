<?php

namespace App\Providers;

use App\Models\LinkMeeting;
use App\Policies\LinkMeetingPolicy;

use App\Models\Department;
use App\Policies\DepartmentPolicy;

use App\Models\LinkSubscription;
use App\Policies\LinkSubscriptionPolicy;

use App\Models\Member;
use App\Policies\MemberPolicy;

use App\Models\Role;
use App\Policies\RolePolicy;

use App\Models\Subscription;
use App\Policies\SubscriptionPolicy;

use App\Models\Meeting;
use App\Policies\MeetingPolicy;

use App\Models\User;
use App\Policies\UserPolicy;

use App\Models\Organization;
use App\Policies\OrganizationPolicy;


















































































use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        LinkMeeting::class => LinkMeetingPolicy::class,
        Department::class => DepartmentPolicy::class,
        LinkSubscription::class => LinkSubscriptionPolicy::class,
        Member::class => MemberPolicy::class,
        Role::class => RolePolicy::class,
        Subscription::class => SubscriptionPolicy::class,
        Meeting::class => MeetingPolicy::class,
        User::class => UserPolicy::class,
        Organization::class => OrganizationPolicy::class,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}