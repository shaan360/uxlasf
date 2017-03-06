<?php
/**
 * Created by PhpStorm.
 * User: zein
 * Date: 7/4/14
 * Time: 2:31 PM
 */

namespace common\models\query;

use common\models\MemberPlots;
use yii\db\ActiveQuery;

class DailySales extends ActiveQuery
{
    public function today()
    {
        $this->andWhere(['date' => date('Y-M-D')]);
        $this->andWhere(['<', '{{%MemberPlots}}.timestamp', time()]);
        return $this;
    }
}
