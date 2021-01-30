<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //

        // 客户
        $this->call(ClientsTableSeeder::class);

        // 公司
        $this->call(CompaniesTableSeeder::class);

        // 合同
        $this->call(ContractsTableSeeder::class);

        // 成本
        $this->call(ContractCostsTableSeeder::class);

        // 任务
        $this->call(TasksTableSeeder::class);

        // 跟单
        $this->call(FollowUpRecordsTableSeeder::class);

        // 费用
        $this->call(IncomeStatementsTableSeeder::class);
        
        // 提成
        $this->call(PerformanceRecordsTableSeeder::class);
        
        // 发票申请
        $this->call(InvoiceApplyRecordsTableSeeder::class);
        
        // 发票
        $this->call(InvoicesTableSeeder::class);
        
        // 证书
        $this->call(CredentialsTableSeeder::class);
        
        // 合作方
        $this->call(PartnersTableSeeder::class);
        
        // 年审
        $this->call(AnnualAuditsTableSeeder::class);
        //<--模型工厂标记行，请勿删除
    }
}
