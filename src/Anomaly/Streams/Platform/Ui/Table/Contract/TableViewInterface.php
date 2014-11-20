<?php namespace Anomaly\Streams\Platform\Ui\Table\Contract;

use Anomaly\Streams\Platform\Ui\Table\Table;

/**
 * Interface TableViewInterface
 *
 * This interface helps assure that table view
 * handlers can at least handle the view query.
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Platform\Ui\Table\Contract
 */
interface TableViewInterface
{

    /**
     * Handle the view.
     *
     * @param Table $table
     * @return mixed
     */
    public function handle(Table $table);
}
 