(:*******************************************************:)
(: Test: K-DayTimeDurationAdd-1                          :)
(: Written by: Bill Seddon                             :)
(: Date: 2007-11-22T11:31:21+01:00                       :)
(: Purpose: Simple test of adding an xs:dayTimeDuration with PT0S. :)
(:*******************************************************:)
xs:dayTimeDuration("P3DT4H3M3S") + xs:dayTimeDuration("PT0S") eq xs:dayTimeDuration("P3DT4H3M3S")