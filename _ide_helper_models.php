<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Article
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $description
 * @property string|null $img
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article query()
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUpdatedAt($value)
 */
	class Article extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Depage
 *
 * @property int $id
 * @property string $title
 * @property string $seo_title
 * @property string $content
 * @property string $description
 * @property string|null $img
 * @property string $slug
 * @property int $menu
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Depage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Depage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Depage query()
 * @method static \Illuminate\Database\Eloquent\Builder|Depage whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Depage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Depage whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Depage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Depage whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Depage whereMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Depage whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Depage whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Depage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Depage whereUpdatedAt($value)
 */
	class Depage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Enpage
 *
 * @property int $id
 * @property string $title
 * @property string $seo_title
 * @property string $content
 * @property string $description
 * @property string|null $img
 * @property string $slug
 * @property int $menu
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Enpage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Enpage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Enpage query()
 * @method static \Illuminate\Database\Eloquent\Builder|Enpage whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enpage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enpage whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enpage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enpage whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enpage whereMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enpage whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enpage whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enpage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enpage whereUpdatedAt($value)
 */
	class Enpage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Main
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Main newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Main newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Main query()
 * @method static \Illuminate\Database\Eloquent\Builder|Main whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Main whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Main whereUpdatedAt($value)
 */
	class Main extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Ropage
 *
 * @property int $id
 * @property string $title
 * @property string $seo_title
 * @property string $content
 * @property string $description
 * @property string|null $img
 * @property string $slug
 * @property int $menu
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Ropage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ropage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ropage query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ropage whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ropage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ropage whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ropage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ropage whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ropage whereMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ropage whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ropage whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ropage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ropage whereUpdatedAt($value)
 */
	class Ropage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Uapage
 *
 * @property int $id
 * @property string $title
 * @property string $seo_title
 * @property string $content
 * @property string $description
 * @property string|null $img
 * @property string $slug
 * @property int $menu
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Uapage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Uapage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Uapage query()
 * @method static \Illuminate\Database\Eloquent\Builder|Uapage whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Uapage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Uapage whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Uapage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Uapage whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Uapage whereMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Uapage whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Uapage whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Uapage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Uapage whereUpdatedAt($value)
 */
	class Uapage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

