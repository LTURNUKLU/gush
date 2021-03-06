<?php

/*
 * This file is part of Gush package.
 *
 * (c) Luis Cordova <cordoval@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Gush\Tests\Fixtures\Command;

use Gush\Command\BaseCommand;
use Gush\Feature\GitDirectoryFeature;
use Gush\Feature\IssueTrackerRepoFeature;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GitDirectoryCommand extends BaseCommand implements IssueTrackerRepoFeature, GitDirectoryFeature
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('test:git-command')
            ->setDescription('Command that implements GitDirectoryFeature')
            ->setHelp('')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        return self::COMMAND_SUCCESS;
    }
}
