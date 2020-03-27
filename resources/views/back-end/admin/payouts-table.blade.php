<table class="wt-tablecategories" style="font-family:'Poppins', Arial, Helvetica, sans-serif; background-size:2px;background-size: 100% 2px; background-repeat: no-repeat;border: 1px solid #eee;">
        <thead>
            <tr style="background: #fcfcfc;">
                <th style="font-weight: 500;color: #323232;font-size: 15px;line-height: 20px;text-align: left;padding: 15px 20px;">{{ trans('lang.user_name') }}</th>
                <th style="font-weight: 500;color: #323232;font-size: 15px;line-height: 20px;text-align: left;padding: 15px 20px;">{{ trans('lang.amount') }}</th>
                <th style="font-weight: 500;color: #323232;font-size: 15px;line-height: 20px;text-align: left;padding: 15px 20px;">{{ trans('lang.payment_method') }}</th>
                <th style="font-weight: 500;color: #323232;font-size: 15px;line-height: 20px;text-align: left;padding: 15px 20px;">{{ trans('lang.processing_date') }}</th>
                <th style="font-weight: 500;color: #323232;font-size: 15px;line-height: 20px;text-align: left;padding: 15px 20px;">{{ trans('lang.status') }}</th>
            </tr>
        </thead>
        @if ($payouts->count() > 0)
            <tbody>
                @foreach ($payouts as $key => $payout)
                    <tr>
                        <td style="border-top: 1px solid #eff2f5;color: #767676;font-size: 13px;line-height: 20px;padding: 10px 20px;text-align: left;">{{ Helper::getUserName($payout->user_id) }}</td>
                        <td style="border-top: 1px solid #eff2f5;color: #767676;font-size: 13px;line-height: 20px;padding: 10px 20px;text-align: left;">
                            {{ Helper::currencyList($payout->currency)['symbol'] }}{{{ $payout->amount }}}
                        </td>
                        <td style="border-top: 1px solid #eff2f5;color: #767676;font-size: 13px;line-height: 20px;padding: 10px 20px;text-align: left;">
                            {{!empty(Helper::getPayoutsList()[$payout->payment_method]['title']) ? Helper::getPayoutsList()[$payout->payment_method]['title'] : ''}}
                        </td>
                        <td style="border-top: 1px solid #eff2f5;color: #767676;font-size: 13px;line-height: 20px;padding: 10px 20px;text-align: left;">{{{ \Carbon\Carbon::parse($payout->created_at)->format('M d, Y') }}}</td>
                        <td style="border-top: 1px solid #eff2f5;color: #767676;font-size: 13px;line-height: 20px;padding: 10px 20px;text-align: left;">{{{ $payout->status }}}</td>
                    </tr>
                @endforeach
            </tbody>
        @endif
</table>