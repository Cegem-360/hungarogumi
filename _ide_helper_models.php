<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Manufacturer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Manufacturer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Manufacturer query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Manufacturer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Manufacturer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Manufacturer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Manufacturer whereUpdatedAt($value)
 */
	final class Manufacturer extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $EAN
 * @property string|null $Cikkszám
 * @property string|null $Gyári_kód
 * @property string|null $Cikknév
 * @property string|null $Gyártó
 * @property string|null $Szélesség
 * @property string|null $Per
 * @property string|null $Szerkezet
 * @property string|null $Átmérő
 * @property string|null $LI
 * @property string|null $SI
 * @property string|null $Furatszám
 * @property string|null $Központi_furat
 * @property string|null $Osztó
 * @property string|null $ET
 * @property string|null $Fogyasztás
 * @property string|null $Tapadás
 * @property string|null $Zajszint
 * @property string|null $Zajszint_érték
 * @property string|null $Súly
 * @property string|null $Idény
 * @property string|null $Felhasználás
 * @property string|null $Összes_készlet
 * @property string|null $Készlet_Szentmihályi_út
 * @property string|null $Készlet_Késmárk_utca
 * @property string|null $Nettó_nagyker_ár
 * @property string|null $Nettó_kisker_ár
 * @property string|null $Termék_kép
 * @property string|null $Minimum_rendelhető_mennyiség
 * @property string|null $minta_név
 * @property string|null $termek_kep_2
 * @property string|null $minta_nev_2
 * @property string|null $cikk_tipus_név
 * @property string|null $felni_model
 * @property string|null $felni_szin
 * @property string|null $Készlet_nt
 * @property string|null $Télre_szerelhető_felni
 * @property string|null $Felni_szerk
 * @property string|null $Felni_dedikált
 * @property string|null $Erősített
 * @property string|null $Defekttűrő
 * @property string|null $Gumi_spec_adat
 * @property string|null $Gumi_autó_adat
 * @property string|null $url
 * @property string|null $retail_price_eur
 * @property string|null $wholesale_price_eur
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @property-read \App\Models\Manufacturer|null $manufacturer
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Stock> $stocks
 * @property-read int|null $stocks_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCikkTipusNév($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCikknév($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCikkszám($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereDefekttűrő($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereEAN($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereET($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereErősített($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereFelhasználás($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereFelniDedikált($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereFelniModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereFelniSzerk($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereFelniSzin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereFogyasztás($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereFuratszám($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereGumiAutóAdat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereGumiSpecAdat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereGyáriKód($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereGyártó($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereIdény($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereKészletKésmárkUtca($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereKészletNt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereKészletSzentmihályiÚt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereKözpontiFurat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereLI($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereMinimumRendelhetőMennyiség($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereMintaNev2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereMintaNév($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereNettóKiskerÁr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereNettóNagykerÁr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereOsztó($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product wherePer($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereRetailPriceEur($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereSI($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereSzerkezet($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereSzélesség($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereSúly($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereTapadás($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereTermekKep2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereTermékKép($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereTélreSzerelhetőFelni($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereWholesalePriceEur($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereZajszint($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereZajszintÉrték($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereÁtmérő($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereÖsszesKészlet($value)
 */
	final class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $product_id
 * @property string $location
 * @property int $quantity
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @property-read \App\Models\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stock newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stock query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stock whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stock whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stock whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stock whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stock whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stock whereUpdatedAt($value)
 */
	final class Stock extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Carbon\CarbonImmutable|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	final class User extends \Eloquent implements \Filament\Models\Contracts\FilamentUser {}
}

