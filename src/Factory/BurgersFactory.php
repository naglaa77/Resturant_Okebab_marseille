<?php

namespace App\Factory;

use App\Entity\Burgers;
use App\Repository\BurgersRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Burgers>
 *
 * @method        Burgers|Proxy create(array|callable $attributes = [])
 * @method static Burgers|Proxy createOne(array $attributes = [])
 * @method static Burgers|Proxy find(object|array|mixed $criteria)
 * @method static Burgers|Proxy findOrCreate(array $attributes)
 * @method static Burgers|Proxy first(string $sortedField = 'id')
 * @method static Burgers|Proxy last(string $sortedField = 'id')
 * @method static Burgers|Proxy random(array $attributes = [])
 * @method static Burgers|Proxy randomOrCreate(array $attributes = [])
 * @method static BurgersRepository|RepositoryProxy repository()
 * @method static Burgers[]|Proxy[] all()
 * @method static Burgers[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Burgers[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Burgers[]|Proxy[] findBy(array $attributes)
 * @method static Burgers[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Burgers[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class BurgersFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'description' => self::faker()->text(),
            'name' => self::faker()->text(255),
            'price' => self::faker()->randomFloat(),
            'subtitle' => self::faker()->text(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Burgers $burgers): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Burgers::class;
    }
}
