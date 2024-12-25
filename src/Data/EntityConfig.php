<?php

declare(strict_types=1);

namespace VUdaltsov\Yii3DataExperiment\Data;

/**
 * @api
 * @template TEntity of array|object
 */
final readonly class EntityConfig
{
    /**
     * @param non-empty-string $name
     * @param Repository<TEntity> $repository
     * @param ListConfig<TEntity> $list
     */
    public function __construct(
        public string $name,
        public Repository $repository,
        public ListConfig $list,
    ) {}
}
